<?php

namespace Src\Creational\AbstractFactory;

use \Src\Creational\AbstractFactory\ToyFactory;
use \Src\Creational\AbstractFactory\SFMazeToy;
use \Src\Creational\AbstractFactory\SFPuzzleToy;

class SFToyFactory implements ToyFactory
{
    private $location = "United States";

    public function makeMaze()
    {
        return new SFMazeToy();
    }

    public function makePuzzle()
    {
        return new SFPuzzleToy();
    }
}
