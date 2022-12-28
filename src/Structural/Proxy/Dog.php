<?php

namespace Src\Structural\Proxy;

use \Exception;
use \Src\Structural\Proxy\AnimalFeeder;

class Dog implements AnimalFeeder
{
    private $petName;

    public function __construct(string $petName)
    {
        if (strlen($petName) > 10) {
            throw new Exception('Pet name too long.');
        }

        $this->petName = $petName;
    }

    public function dropFood(int $hungerLevel, bool $water = false): string
    {
        return $this->selectFood($hungerLevel) . ($water ? ' with water.' : '');
    }

    public function displayFood($hungerLevel): string
    {
        return $this->selectFood($hungerLevel);
    }

    protected function selectFood(int $hungerLevel): string
    {
        if ($hungerLevel === 3) {
            return 'chicken and vegetables';
        } elseif (date('H') < 10) {
            return 'turkey and beef';
        } else {
            return 'chicken and rice';
        }
    }
}
