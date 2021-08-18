<?php

    class AsciiFigure {

        public int $number;

        function __construct(int $number){
            $this->number = $number;
        }

        function drawFigure(): string {
            $figure = "";
            for($i = $this->number; $i > 0; $i--){
                for($j = ($i-1)*4; $j > 0; $j--){
                    $figure .= "/";
                }
                for($star = ($this->number - $i)*4; $star > 0; $star--){
                    $figure .= "*";
                }
                for($star = ($this->number - $i)*4; $star > 0; $star--){
                    $figure .= "*";
                }
                for($j = ($i-1)*4; $j > 0; $j--){
                    $figure .= "\\";
                }
                $figure .= "\n";
            }
            return $figure;
        }
    }

    $selection = (int) readline("Enter a number: ");

    $asciiFigure = new AsciiFigure($selection);
    echo $asciiFigure->drawFigure();