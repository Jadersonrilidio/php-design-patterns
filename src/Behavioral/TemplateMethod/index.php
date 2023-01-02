<?php

require_once('vendor/autoload.php');

# TEMPLATE METHOD

use \Src\Behavioral\TemplateMethod\MeatballPasta;
use \Src\Behavioral\TemplateMethod\VeganPasta;

$dish = new MeatballPasta(true);
$dish->cook();

$dish = new VeganPasta();
$dish->cook();
