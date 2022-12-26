<?php

namespace Src\Creational\AbstractFactory;

use Src\Creational\AbstractFactory\MazeToy;

class SFMazeToy extends MazeToy
{
    private $size;
    private $pictureName;

    public function __construct()
    {
        $this->size = 9;
        $this->pictureName = 'San Francisco Maze';
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
