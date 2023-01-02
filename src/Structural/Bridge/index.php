<?php

require_once('vendor/autoload.php');

# BRIDGE

use \Src\Structural\Bridge\Phone;
use \Src\Structural\Bridge\Tablet;
use \Src\Structural\Bridge\InstantMessenger;
use \Src\Structural\Bridge\SMS;

$sm = new Phone();
$sm->setSender(new InstantMessenger());
var_dump($sm->send('Lorem Ipsun et aleo...'));

$sm->setSender(new SMS());
var_dump($sm->send('Lorem Ipsun et aleo...'));

$tablet = new Tablet();
$tablet->setSender(new InstantMessenger());
var_dump($tablet->send('Lorem Ipsun et aleo...'));

$tablet->setSender(new SMS());
var_dump($tablet->send('Lorem Ipsun et aleo...'));
