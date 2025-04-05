<?php

namespace Ann\Repo;

class Snek
{
    public string $name;
    public string $chocolate;
    public array $toppings;

    public function __construct(string $name, string $chocolate, array $toppings)
    {
        $this->name = $name;
        $this->chocolate = $chocolate;
        $this->toppings = $toppings;
    }

    public function prepare(): void
    {
        echo "{$this->name}\n";
        echo "{$this->chocolate}\n";
        echo ":";
        foreach ($this->toppings as $toppings) {
            echo "$toppings; ";
        };
        echo "\n";
        echo "========================================" . "\n";
    }
    public function cut()
    {
        echo "Данную вкусняшку не нарезают." . PHP_EOL;
    }
}
