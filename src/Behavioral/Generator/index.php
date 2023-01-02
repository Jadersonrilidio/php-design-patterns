<?php

require_once('vendor/autoload.php');

# GENERATOR

use \Src\Behavioral\Generator\SquaredNumberGenerator;

$sng = new SquaredNumberGenerator(3, 13);

$sng->ExaustYields();
