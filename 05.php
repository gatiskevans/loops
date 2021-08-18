<?php

    class Piglet {
        public int $score = 0;
        public int $diceRolled;

        function rollDice(): int {
            $this->diceRolled = rand(1, 6);
            return $this->diceRolled > 1 ? $this->score += $this->diceRolled : $this->score = 0;
        }

        function game(){
            while(true){
                $this->rollDice();
                echo "You rolled a $this->diceRolled!\n";
                $this->diceRolled === 1 ? die("You got $this->score points.") : $selection = readline("Roll again? (Y/N) ");

                $isPromptActive = true;
                while($isPromptActive) {
                    switch (true) {
                        case strtoupper($selection) === "Y" || strtoupper($selection) === "YES":
                            $isPromptActive = false;
                            break;
                        case strtoupper($selection) === "N" || strtoupper($selection) === "NO";
                            die("You got $this->score points!");
                        default:
                            $selection = readline("Roll again? (Y/N) ");
                            break;
                    }
                }

            }
        }

    }

    $pigletGame = new Piglet();
    echo "Welcome to piglet!\n";
    $pigletGame->game();

