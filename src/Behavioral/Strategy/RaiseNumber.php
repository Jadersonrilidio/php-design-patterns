<?php

namespace Src\Behavioral\Strategy;

use \Src\Behavioral\Strategy\Power;

class RaiseNumber
{
    private $strategy;

    public function __construct(Power $strategy)
    {
        $this->strategy = $strategy;
    }

    public function raise(int $number): int
    {
        return $this->strategy->raise($number);
    }
}
