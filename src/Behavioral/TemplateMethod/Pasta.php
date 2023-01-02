<?php

namespace Src\Behavioral\TemplateMethod;

abstract class Pasta
{
    public function __construct(bool $cheese = false)
    {
        $this->cheese = $cheese;
    }

    public function cook()
    {
        var_dump('Cooking pasta.');

        $this->boilPasta();
        $this->addSauce();
        $this->addMeat();

        if ($this->cheese) {
            $this->addCheese();
        }

        var_dump('Ready.');
    }

    public function boilPasta(): bool
    {
        return true;
    }

    abstract public function addSauce(): bool;

    abstract public function addMeat(): bool;

    abstract public function addCheese(): bool;
}
