<?php

require_once('vendor/autoload.php');

# STRATEGY

use \Src\Behavioral\Strategy\RaiseNumber;
use \Src\Behavioral\Strategy\Square;
use \Src\Behavioral\Strategy\Cube;

$value = new RaiseNumber(new Square());
var_dump($value->raise(8));

$value = new RaiseNumber(new Cube());
var_dump($value->raise(8));
