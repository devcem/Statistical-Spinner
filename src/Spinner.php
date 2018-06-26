<?php

	/**
	 * 
	 */
	class Spinner{
		
		private $lines = array();

		function __construct($database){
			$file = $this->read($database);

			$this->lines = $this->parse($file);
		}

		function tokenize($words){
			$tokens = explode(" ", $words);

			return $tokens;
		}

		function read($database){
			return file_get_contents($database);
		}

		function parse($data){
			$output = array();
			$lines  = explode("\n", $data);

			foreach ($lines as $key => $line) {
				$rows = explode("\t", $line);
				$output[] = array(@$this->tokenize($rows[0]), @$this->tokenize($rows[1]));
			}

			return $output;
		}

		function getSimilar($words, $from, $to){
			$output = array();

			foreach ($words as $token_index => $token_word) {
				foreach ($this->lines as $key => $rows) {
					if(in_array($token_word, $rows[$from])){
						@$output[$token_index][$rows[$to][$token_index]]++;
					}
				}

				arsort($output[$token_index]);
			}

			foreach ($output as $key => $token) {
				$output[$key] = array_splice($token, 0, 3);
			}

			return $output;
		}

		function selectWordsByScore($input){
			return array_map(function($word){
				$first = array_keys($word);

				return $first[0];
			}, $input);
		}

		function transform($words){
			$words   = $this->tokenize($words);
			$similar = $this->getSimilar($words, 0, 1);
			$possible_translation = $this->selectWordsByScore($similar);

			//Apply swap
			$similar = $this->getSimilar($possible_translation, 1, 0);
			$possible_translation = $this->selectWordsByScore($similar);

			return $possible_translation;
		}
	}