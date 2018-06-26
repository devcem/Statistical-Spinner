<?php

	include 'src/Spinner.php';

	$spinner = new Spinner('nld.txt');
	$content = $spinner->transform('I will eat food when possible');

	print_r($content);