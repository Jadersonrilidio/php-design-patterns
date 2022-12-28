<?php

namespace Src\Structural\FlyWeight;

use \Src\Structural\FlyWeight\Shape;

class Circle implements Shape
{
    private $colour;
    private $x;
    private $y;
    private $radius;

    public function __construct(string $colour)
    {
        $this->colour = $colour;
    }

    public function setX(float $x)
    {
        $this->x = $x;
    }

    public function setY(float $y)
    {
        $this->y = $y;
    }

    public function setRadius(float $radius)
    {
        $this->radius = $radius;
    }

    public function draw()
    {
        return "Drawing circle which is: " . $this->colour . " at [" . $this->x . ", " . $this->y . "] of radius " . $this->radius . ".<br>";
    }
}