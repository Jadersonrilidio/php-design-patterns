<?php

require_once('vendor/autoload.php');

# -----------------------------------------------------------------------------------

# HIDE PRIVATE-PROTECTED ATTRIBUTES FROM VAR_DUMP //todo

use \Src\Example;

$example = new Example();
var_dump($example);

# -----------------------------------------------------------------------------------

# SIMPLE FACTORY

use \Src\Creational\SimpleFactory\NotifierFactory;

$mobile = NotifierFactory::getNotifier('SMS', '+447999888777');
echo $mobile->sendNotification();

$email = NotifierFactory::getNotifier('Email', 'jayrods@gmail.com');
echo $email->sendNotification();

# -----------------------------------------------------------------------------------

# FACTORY

use \Src\Creational\Factory\ElectronicNotifierFactory;
use \Src\Creational\Factory\CourierNotifierFactory;

$mobile = ElectronicNotifierFactory::getNotifier('SMS', '+447999888777');
echo $mobile->sendNotification();

$email = ElectronicNotifierFactory::getNotifier('Email', 'jayrods@gmail.com');
echo $email->sendNotification();

$post = CourierNotifierFactory::getNotifier('Post', '10 Downing Street, SW1A 2AA');
echo $post->sendNotification();

# -----------------------------------------------------------------------------------

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

# -----------------------------------------------------------------------------------

# LAZY LOADER

use \Src\Creational\LazyLoader\BurgerLazyLoader;

$burgerLazyLoader = new BurgerLazyLoader;

$burgerOne = BurgerLazyLoader::getBurguer(true, true);
$burgerTwo = BurgerLazyLoader::getBurguer(false, true);
$burgerThree = BurgerLazyLoader::getBurguer(true, false);
$burgerFour = BurgerLazyLoader::getBurguer(false, false);

echo "Burger 1 - " . $burgerOne->getPrice();
echo "Burger 2 - " . $burgerTwo->getPrice();
echo "Burger 3 - " . $burgerThree->getPrice();
echo "Burger 4 - " . $burgerFour->getPrice();

echo "Total burgers instantiated: " . BurgerLazyLoader::getBurgerCount();

$burgerFive = BurgerLazyLoader::getBurguer(true, true);
$burgerSix = BurgerLazyLoader::getBurguer(false, true);
$burgerSeven = BurgerLazyLoader::getBurguer(true, false);
$burgerEight = BurgerLazyLoader::getBurguer(false, false);

echo "Total burgers instantiated: " . BurgerLazyLoader::getBurgerCount();

# -----------------------------------------------------------------------------------

# BUILDER PATTERN

use \Src\Creational\Builder\PizzaBuilder;
use \Src\Creational\Builder\Pizza;

$pizzaRecipe  = (new PizzaBuilder(7))
    ->cheese(true)
    ->pepperoni(true)
    ->bacon(true)
    ->build();

$order = new Pizza($pizzaRecipe);
echo $order->show();

# -----------------------------------------------------------------------------------

# PROTOTYPE PATTERN

use \Src\Creational\Prototype\Student;

$prototypeStudent = new Student();
$prototypeStudent->setName('Jay');
$prototypeStudent->setYear(4);
$prototypeStudent->setGrade('F');

$clonedStudent = clone $prototypeStudent;
$clonedStudent->setName('Jay Rods');
$clonedStudent->setYear(2);
$clonedStudent->setGrade('B');
$clonedStudent->danceSkills = 'Outstanding';
$clonedStudent->dance = function (string $style) {
    return "Dancing $style style.";
};

$clonedStudent->dance->__invoke('Batchata');
