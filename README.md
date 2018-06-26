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

## Credits
This project is developing by A.I. Spinner. In that repository we only share some parts of project and small dataset. To get better results, software needs larger datasets.

Please visit https://aispinner.org to use API or it's plugins.