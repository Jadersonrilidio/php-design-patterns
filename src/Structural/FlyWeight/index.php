<?php

require_once('vendor/autoload.php');

# FLYWEIGHT (with Builder Creational Pattern embeed for help manipulate circle attributes)

use \Src\Structural\FlyWeight\ShapeFactory;

$colours = array('Green', 'Red', 'Yellow', 'Black', 'Blue', "Pink", 'Purple', 'Brown', 'Orange', 'White', 'Gray');

$factory = new ShapeFactory();

for ($i = 0; $i <= 15; $i++) {
    $randomColour = $colours[array_rand($colours)];

    $circle = $factory->getCircle($randomColour);
    $circle->setX(rand(0, 50));
    $circle->setY(rand(0, 50));
    $circle->setRadius(rand(0, 10));

    echo $circle->draw();
}

for ($i = 0; $i <= 15; $i++) {
    $randomColour = $colours[array_rand($colours)];

    $square = $factory->getSquare($randomColour);
    $square->setX(rand(0, 50));
    $square->setY(rand(0, 50));
    $square->setEdge(rand(0, 50));

    echo $square->draw();
}
