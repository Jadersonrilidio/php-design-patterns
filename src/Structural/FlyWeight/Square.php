<?php

namespace Src\Structural\FlyWeight;

use \Src\Structural\FlyWeight\Shape;

class Square implements Shape
{
    private $colour;
    private $x;
    private $y;
    private $edge;

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

    public function setEdge(float $edge)
    {
        $this->edge = $edge;
    }

    public function draw()
    {
        return "Drawing square which is: " . $this->colour . " at [" . $this->x . ", " . $this->y . "] of edges " . $this->edge . ".<br>";
    }
}
