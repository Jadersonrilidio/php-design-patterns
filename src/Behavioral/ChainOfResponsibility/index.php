<?php

require_once('vendor/autoload.php');

# CHAIN OF RESPONSIBILITY

use \Src\Behavioral\ChainOfResponsibility\AssociatePurchaser;
use \Src\Behavioral\ChainOfResponsibility\ManagerPurchaser;
use \Src\Behavioral\ChainOfResponsibility\DirectorPurchaser;
use \Src\Behavioral\ChainOfResponsibility\BoardPurchaser;

$associate = new AssociatePurchaser('Jay');
$manager = new ManagerPurchaser('Jack');
$director = new DirectorPurchaser('Jackson');
$board = new BoardPurchaser('Jaderson');

$associate->setNextPurchaser($manager);
$manager->setNextPurchaser($director);
$director->setNextPurchaser($board);

$associate->buy(11000);
