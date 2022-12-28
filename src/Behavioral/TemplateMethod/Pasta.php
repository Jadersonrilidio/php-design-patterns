<?php

namespace Src\Behavioral\TemplateMethod;

abstract class Pasta
{
    public function __construct(bool $cheese = true)
    {
        $this->cheese = $cheese;
    }

    public function cook()
    {
        var_dump('Cooked pasta.');

        $this->boilPasta();
        $this->addSauce();
        $this->addMeat();

        if ($this->cheese) {
            $this->addCheese();
        }
    }

    public function boilPasta(): bool
    {
        return true;
    }

    abstract public function addSauce(): bool;

    abstract public function addMeat(): bool;

    abstract public function addCheese(): bool;
}
