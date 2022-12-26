<?php

namespace Src\Creational\Builder;

use \Src\Creational\Builder\PizzaBuilder;

class Pizza
{
    private int $size;
    private bool $cheese;
    private bool $pepperoni;
    private bool $bacon;

    public function __construct(PizzaBuilder $builder)
    {
        $this->size = $builder->getSize();
        $this->cheese = $builder->getCheese();
        $this->pepperoni = $builder->getPepperoni();
        $this->bacon = $builder->getBacon();
    }

    public function show()
    {
        $recipe = $this->size . "inch pizza with the following toppings: ";
        $recipe .= $this->cheese ? 'cheese, ' : '';
        $recipe .= $this->pepperoni ? 'pepperoni, ' : '';
        $recipe .= $this->bacon ? 'bacon, ' : '';
        $recipe = trim($recipe, ', ');

        return $recipe;
    }
}
