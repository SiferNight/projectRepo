<?php 
namespace Ann\Repo;

class Chocolate1 extends Snek{
    public function __construct(string $name="Шоколадка",string $chocolate="Молочный&белый шоколад",array $toppings=["кокосовая стружка","орешки"]){
        parent::__construct($name, $chocolate, $toppings);
    }
}