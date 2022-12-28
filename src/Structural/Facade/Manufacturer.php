<?php

namespace Src\Structural\Facade;

class Manufacturer
{
    private $capacity;

    public function __construct(int $capacity)
    {
        $this->capacity = $capacity;
    }

    public function build(): string
    {
        return uniqid();
    }
}
