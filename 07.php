<?php

    class RollTwoDice {

        public int $sum;

        function __construct(int $number){
            $this->sum = $number;
        }

        function getSum(): string {
            $message = "";

            $calculating = true;
            while($calculating){
                $firstRoll = rand(1, 6);
                $secondRoll = rand(1, 6);
                $result = $firstRoll + $secondRoll;

                if($result == $this->sum){
                    $message .= "$firstRoll and $secondRoll = $result";
                    $calculating = false;
                } else{
                    $message .= "$firstRoll and $secondRoll = $result\n";
                }
            }

            return $message;
        }

    }

    $number  = (int) readline("Desired sum: ");
    $number > 12 || $number < 2 ? die("Invalid sum for two dice combination!") : $rollDice = new RollTwoDice($number);
    echo $rollDice->getSum();