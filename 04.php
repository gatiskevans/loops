<?php

    class FizzBuzz {
        public int $number;

        function __construct(int $number){
            $this->number = $number;
        }

        function fizzBuzz(): string {
            $message = '';
            for($i = 1; $i <= $this->number; $i++){
                if($i % 20 === 1){
                    $message .= "\n";
                }

                switch($i){
                    case $i % 3 === 0 && $i % 5 === 0:
                        $message .= "FizzBuzz ";
                        break;
                    case $i % 3 === 0:
                        $message .= "Fizz ";
                        break;
                    case $i % 5 === 0:
                        $message .= "Buzz ";
                        break;
                    default:
                        $message .= "$i ";
                        break;
                }
            }
            return $message;
        }

    }

    $selection = (int) readline("Enter a number: ");

    $fizzBuzz = new FizzBuzz($selection);
    echo "Max value? $selection";
    echo $fizzBuzz->fizzBuzz();