<?php

namespace Ann\Repo;


class ChocolateFabrik
{
    public array $VidChocolate=["Шоколадка","Чокопай","Крамбл куки"];

    public function orderSnek(string $name): void
    {
        $snek = $this->createSnek($name);

        $snek->prepare();
    }


    public function createSnek(string $name): Snek|string
    {
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

        $i=0;
        foreach($this->VidChocolate as $VidChocolate){
            if ($name===$VidChocolate){
                $i=$i+1;
            }
        }
        if ($i===0){
            echo "Такой вкусняшки нет в списке(";   
        }
        $i=0;

        exit;

        
    }
}