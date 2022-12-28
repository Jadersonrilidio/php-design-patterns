<?php

namespace Src\Behavioral\TemplateMethod;

use \Src\Behavioral\TemplateMethod\Pasta;

class MeatballPasta extends Pasta
{
    public function addSauce(): bool
    {
        var_dump('Added tomato sauce.');

        return true;
    }

    public function addMeat(): bool
    {
        var_dump('Added meatballs.');

        return true;
    }

    public function addCheese(): bool
    {
        var_dump('Added cheese.');

        return true;
    }
}
