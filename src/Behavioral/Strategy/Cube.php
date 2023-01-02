<?php

namespace Src\Behavioral\Strategy;

use \Src\Behavioral\Strategy\Power;

class Cube implements Power
{
    public function raise(int $number): int
    {
        return pow($number, 3);
    }
}