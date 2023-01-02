<?php

require_once('vendor/autoload.php');

# FACADE

use \Src\Structural\Facade\ToyFactory;

$toyShop = new ToyFactory(20, '1 Factory Lane, Oxfordshire', '07 999 888 666');
$order = $toyShop->processOrder('Rua Manoel Pinto, 70-A, Conselheiro Lafaiete', '+55 31 9 8624 5883');
var_dump($order);
