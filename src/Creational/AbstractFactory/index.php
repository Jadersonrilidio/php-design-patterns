<?php

require_once('vendor/autoload.php');

# ABSTRACT FACTORY

# Downside emerge when you need to add new product classes, therefore you gonna need to update the AbstractFactory, that being a violation of SOLID Interface Segregation principle.

use \Src\Creational\AbstractFactory\SFToyFactory;
use \Src\Creational\AbstractFactory\UKToyFactory;

$sff = new SFToyFactory();
var_dump($sff->makeMaze());
var_dump($sff->makePuzzle());

$ukf = new UKToyFactory();
var_dump($ukf->makeMaze());
var_dump($ukf->makePuzzle());
