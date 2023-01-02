<?php

require_once('vendor/autoload.php');

# PROXY

use \Src\Structural\Proxy\AnimalFeederProxy;

$cat = new AnimalFeederProxy('Cat', 'Kitty');
var_dump($cat->displayFood(1));
var_dump($cat->dropFood(1, true));

$dog = new AnimalFeederProxy('Dog', 'Anisio');
var_dump($dog->displayFood(1));
var_dump($dog->dropFood(1, true));
