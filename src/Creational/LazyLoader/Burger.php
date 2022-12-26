<?php

namespace Src\Creational\LazyLoader;

class Burger
{
    private $cheese;
    private $chips;
    private $price;

    public function _construct(bool $cheese, bool $chips)
    {
        $this->cheese = $cheese;
        $this->chips = $chips;

        $this->price = rand(1, 2.50) + ($cheese ? 0.5 : 0) + ($chips ? 1 : 0);
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
