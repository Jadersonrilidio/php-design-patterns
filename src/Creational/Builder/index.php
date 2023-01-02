<?php

require_once('vendor/autoload.php');

# BUILDER PATTERN

use \Src\Creational\Builder\PizzaBuilder;
use \Src\Creational\Builder\Pizza;

$pizzaRecipe  = (new PizzaBuilder(7))
    ->cheese(true)
    ->pepperoni(true)
    ->bacon(true)
    ->build();

$order = new Pizza($pizzaRecipe);
echo $order->show();
