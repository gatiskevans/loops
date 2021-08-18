<?php

    class NumberSquare {

        public int $min;
        public int $max;

        function __construct(int $min, int $max){
            $this->min = $min;
            $this->max = $max;
        }

        function drawPattern(): string{
            $message = "";
            for($i = $this->min; $i <= $this->max; $i++){
                for($j = $i; $j <= $this->max; $j++){
                    $message .= "$j";
                }
                for($j = $this->min; $j < $i; $j++){
                    $message .= "$j";
                }
                $message .= "\n";
            }
            return $message;
        }

    }

    $minNumber = readline("Min? ");
    $maxNumber = readline("Max? ");

    $minNumber > $maxNumber  || !is_numeric($minNumber) || !is_numeric($maxNumber)? die("Invalid input") : ($newNumberSquare = new NumberSquare($minNumber, $maxNumber));
    echo $newNumberSquare->drawPattern();