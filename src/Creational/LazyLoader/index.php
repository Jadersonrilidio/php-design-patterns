<?php

require_once('vendor/autoload.php');

# LAZY LOADER

use \Src\Creational\LazyLoader\BurgerLazyLoader;

$burgerOne = BurgerLazyLoader::getBurguer(true, true);
$burgerTwo = BurgerLazyLoader::getBurguer(false, true);
$burgerThree = BurgerLazyLoader::getBurguer(true, false);
$burgerFour = BurgerLazyLoader::getBurguer(false, false);
$burgerFive = BurgerLazyLoader::getBurguer(true, true);
$burgerSix = BurgerLazyLoader::getBurguer(false, true);
$burgerSeven = BurgerLazyLoader::getBurguer(true, false);
$burgerEight = BurgerLazyLoader::getBurguer(false, false);

var_dump($burgerOne);

echo "Total burgers instantiated: " . BurgerLazyLoader::getBurgerCount();
