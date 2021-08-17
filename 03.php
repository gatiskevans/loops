<?php

    $firstWord = readline("Enter first word: ");
    $secondWord = readline("Enter second word: ");

    $numberOfDots = 30 - strlen($firstWord) - strlen($secondWord);

    echo $firstWord;
    for($i = 0; $i < $numberOfDots; $i++){
        echo ".";
    }
    echo $secondWord;