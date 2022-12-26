<?php

namespace Src\Creational\Builder;

class PizzaBuilder
{
    // Attributes could be public as well, thus all getter methods are no longer needed.
    private int $size;
    private bool $cheese;
    private bool $pepperoni;
    private bool $bacon;

    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function cheese(bool $cheese): PizzaBuilder
    {
        $this->cheese = $cheese;
        return $this;
    }

    public function pepperoni(bool $pepperoni): PizzaBuilder
    {
        $this->pepperoni = $pepperoni;
        return $this;
    }

    public function bacon(bool $bacon): PizzaBuilder
    {
        $this->bacon = $bacon;
        return $this;
    }

    public function build()
    {
        return $this;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getCheese(): bool
    {
        return $this->cheese;
    }

    public function getPepperoni(): bool
    {
        return $this->pepperoni;
    }

    public function getBacon(): bool
    {
        return $this->bacon;
    }
}
