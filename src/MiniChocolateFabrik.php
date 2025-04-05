<?php

namespace Ann\Repo;

class MiniChocolateFabrik extends ChocolateFabrik{
    public array $VidChocolate = [
        "Шоколадка", 
        "Чокопай", 
        "Крамбл куки", 
        "Маршмеллоу Криспи"
    ];

    public function createSnek(string $name): Snek {
            if ($name === "Шоколадка") {
                $newChocolate1 = new Chocolate1();
                return $newChocolate1;
            }
    
            if ($name === "Чокопай") {
                $newChocolate2 = new Chocolate2();
                return $newChocolate2;
            }
    
            if ($name === "Крамбл куки") {
                $newChocolate3 = new Chocolate3();
                return $newChocolate3;
            }

            if ($name === "Маршмеллоу Криспи") {
                $newChocolate4 = new Snek ($name, "молочный", ["маршмеллоу", "рисовые шарики"]) ;
                return $newChocolate4;
            }
    
            $i=0;
            foreach($this->VidChocolate as $VidChocolate){
                if ($name===$VidChocolate){ 
                    $i=$i+1;
                }
            }
            if ($i===0){
                echo "Такой вкусняшки нет в списке(";   
            }
    
            exit;

    }
}