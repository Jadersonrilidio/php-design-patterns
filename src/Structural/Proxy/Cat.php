<?php

namespace Src\Structural\Proxy;

use \Exception;
use \Src\Structural\Proxy\AnimalFeeder;

class Cat implements AnimalFeeder
{
    private $petName;

    public function __construct(string $petName)
    {
        $this->petName = $petName;
    }

    public function dropFood(int $hungerLevel, bool $water = false): string
    {
        return $this->selectFood($hungerLevel) . ($water ? ' with water.' : '');
    }

    public function displayFood(int $hungerLevel): string
    {
        return $this->selectFood($hungerLevel);
    }

    protected function selectFood(int $hungerLevel): string
    {
        switch ($hungerLevel) {
            case 0:
                return 'lamb';
                break;
            case 1:
                return 'chicken';
                break;
            case 3:
                return 'tuna';
                break;
            default:
                throw new Exception('Food option not available.');
                break;
        }
    }
}
