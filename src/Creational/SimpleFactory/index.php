<?php

require_once('vendor/autoload.php');

# SIMPLE FACTORY

use \Src\Creational\SimpleFactory\NotifierFactory;

$mobile = NotifierFactory::getNotifier('SMS', '+447999888777');
echo $mobile->sendNotification();

$email = NotifierFactory::getNotifier('Email', 'jayrods@gmail.com');
echo $email->sendNotification();
