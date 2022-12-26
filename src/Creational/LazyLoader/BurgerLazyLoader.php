<?php

namespace Src\Creational\LazyLoader;

use \Src\Creational\LazyLoader\Burger;

class BurgerLazyLoader
{
    private static $instances = array();

    public static function getBurguer(bool $cheese, bool $chips): Burger
    {
        if (!isset(self::$instances[$cheese . $chips])) {
            self::$instances[$cheese . $chips] = new Burger($cheese, $chips);
        }

        return self::$instances[$cheese . $chips];
    }

    public static function getBurgerCount(): int
    {
        return count(self::$instances);
    }
}
