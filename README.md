# Statistical-Spinner
This software aims to find statistically alternative writings of any word. It basically scans the parallel translations and scores the possibilities of words alternative writing.

## Code Example
Class can be defined with ```new Spinner(DATABASE_PATH);```
DATABASE_PATH should be the path of parallel translation text file. Please visit http://www.manythings.org/anki/ address to download parallel translation files for different language pairs.

After defining class you'll be able to use it with ```transform``` function.

It should be like that :

```$spinner->transform('I will eat food when possible');```

## Example
When we put that sentence into transformer, it returns as possible alternatives of words with score information.

Original : 
```I will eat food when possible```

Spun :
```When possible i am going to eat food```

We need parallel translation database to transform words. We use Dutch language to calculate scores because of similarity of English-Dutch language pairs.

## About
This project, basically a branch of statistical machine translation on PHP repository. You could find more detail on this page : https://github.com/devcem/NMT-on-PHP

Machine learning algorithms can use RNN and LTSM methods to predict possible translations. This project aims to get translation without creating model. I would like to do this thing to understand RNN and LTSM methods and their necessity.

It basically scans the database and calculates to probability and repetition count. With some calculations we get basic translation predictions.

I choose English-Turkish language model because of my native language. Also Turkish language is very different than English on grammar base.

Also I choose PHP because, i simply good at it. After building model, i could change it to better language to get better performance and results.

Statistical formula to find translation of a word : $score = 1 / ( word_count + 0.1 )

For sequence words, we add more score to original word : $score+= 1 / ( word_count + 0.1 )

## Credits
This project is developing by A.I. Spinner. In that repository we only share some parts of project and small dataset. To get better results, software needs larger datasets.

Please visit https://aispinner.org to use API or it's plugins.