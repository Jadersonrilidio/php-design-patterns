<?php

namespace Src\Behavioral\TemplateMethod;

use \Src\Behavioral\TemplateMethod\Pasta;

class VeganPasta extends Pasta
{
    public function addSauce(): bool
    {
        var_dump('Added tomato sauce.');

        return true;
    }

    public function addMeat(): bool
    {
        return false;
    }

    public function addCheese(): bool
    {
        return false;
    }
}
