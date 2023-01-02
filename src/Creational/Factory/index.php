<?php

require_once('vendor/autoload.php');

# FACTORY

use \Src\Creational\Factory\ElectronicNotifierFactory;
use \Src\Creational\Factory\CourierNotifierFactory;

$mobile = ElectronicNotifierFactory::getNotifier('SMS', '+447999888777');
echo $mobile->sendNotification();

$email = ElectronicNotifierFactory::getNotifier('Email', 'jayrods@gmail.com');
echo $email->sendNotification();

$post = CourierNotifierFactory::getNotifier('Post', '10 Downing Street, SW1A 2AA');
echo $post->sendNotification();
