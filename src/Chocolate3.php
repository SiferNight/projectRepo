<?php

namespace Ann\Repo;

class chocolate3 extends Snek{

    public function __construct(string $name="Крамбл куки",string $chocolate="Шоколадная крошка",array $toppings=["крем","посыпка"])
    {
        parent::__construct($name, $chocolate, $toppings);
    }
}