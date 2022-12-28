<?php

namespace Src\Structural\FlyWeight;

use \Src\Structural\FlyWeight\Circle;
use \Src\Structural\FlyWeight\Square;

class ShapeFactory
{
    private $shapeMap = array();

    public function getCircle(string $colour)
    {
        $circle = "Circle_$colour";

        if (!isset($this->shapeMap[$circle])) {
            echo "<b style='color: $colour'>Creating a $colour Circle.</b><br>";
            $this->shapeMap[$circle] = new Circle($colour);
        }

        return $this->shapeMap[$circle];
    }

    public function getSquare(string $colour)
    {
        $square = "Square_$colour";

        if (!isset($this->shapeMap[$square])) {
            echo "<b style='color: $colour'>Creating a $colour Square.</b><br>";
            $this->shapeMap[$square] = new Square($colour);
        }

        return $this->shapeMap[$square];
    }
}
