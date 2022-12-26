<?php

namespace Src\Creational\AbstractFactory;

use \Src\Creational\AbstractFactory\ToyFactory;
use \Src\Creational\AbstractFactory\UKMazeToy;
use \Src\Creational\AbstractFactory\UKPuzzleToy;

class UKToyFactory implements ToyFactory
{
    private $location = "United Kingdom";

    public function makeMaze()
    {
        return new UKMazeToy();
    }

    public function makePuzzle()
    {
        return new UKPuzzleToy();
    }
}
