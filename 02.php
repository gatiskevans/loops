<?php

    $number = (int) readline("Input number of terms: ");

    //todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function
    for($i = 1; $i <= $number; $i++){
        $result = $i;
        for($j = 1; $j < $i; $j++){
            $result *= $i;
        }
        echo $result . PHP_EOL;
    }