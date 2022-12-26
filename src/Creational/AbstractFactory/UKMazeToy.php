<?php

namespace Src\Creational\AbstractFactory;

use Src\Creational\AbstractFactory\MazeToy;

class UKMazeToy extends MazeToy
{
    private $size;
    private $pictureName;

    public function __construct()
    {
        $this->size = 9;
        $this->pictureName = 'London Maze';
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getpictureName(): string
    {
        return $this->pictureName;
    }
}
