<?php

require_once('vendor/autoload.php');



# -----------------------------------------------------------------------------------

# GENERAL TESTS

// use \Src\Example;
// $example = new Example();
// var_dump($example); //todo. hide private attributes not successful

// use \Src\Environment;
// Environment::start();
// var_dump(getenv('TEST_ENV_VARS'));

# -----------------------------------------------------------------------------------

# SIMPLE FACTORY

// use \Src\Creational\SimpleFactory\NotifierFactory;

// $mobile = NotifierFactory::getNotifier('SMS', '+447999888777');
// echo $mobile->sendNotification();

// $email = NotifierFactory::getNotifier('Email', 'jayrods@gmail.com');
// echo $email->sendNotification();

# -----------------------------------------------------------------------------------

# FACTORY

// use \Src\Creational\Factory\ElectronicNotifierFactory;
// use \Src\Creational\Factory\CourierNotifierFactory;

// $mobile = ElectronicNotifierFactory::getNotifier('SMS', '+447999888777');
// echo $mobile->sendNotification();

// $email = ElectronicNotifierFactory::getNotifier('Email', 'jayrods@gmail.com');
// echo $email->sendNotification();

// $post = CourierNotifierFactory::getNotifier('Post', '10 Downing Street, SW1A 2AA');
// echo $post->sendNotification();

# -----------------------------------------------------------------------------------

# ABSTRACT FACTORY

# Downside emerge when you need to add new product classes, therefore you gonna need to update the AbstractFactory, that being a violation of SOLID Interface Segregation principle.

// use \Src\Creational\AbstractFactory\SFToyFactory;
// use \Src\Creational\AbstractFactory\UKToyFactory;

// $sff = new SFToyFactory();
// var_dump($sff->makeMaze());
// var_dump($sff->makePuzzle());

// $ukf = new UKToyFactory();
// var_dump($ukf->makeMaze());
// var_dump($ukf->makePuzzle());

# -----------------------------------------------------------------------------------

# LAZY LOADER

// use \Src\Creational\LazyLoader\BurgerLazyLoader;

// $burgerOne = BurgerLazyLoader::getBurguer(true, true);
// $burgerTwo = BurgerLazyLoader::getBurguer(false, true);
// $burgerThree = BurgerLazyLoader::getBurguer(true, false);
// $burgerFour = BurgerLazyLoader::getBurguer(false, false);
// $burgerFive = BurgerLazyLoader::getBurguer(true, true);
// $burgerSix = BurgerLazyLoader::getBurguer(false, true);
// $burgerSeven = BurgerLazyLoader::getBurguer(true, false);
// $burgerEight = BurgerLazyLoader::getBurguer(false, false);

// var_dump($burgerOne);

// echo "Total burgers instantiated: " . BurgerLazyLoader::getBurgerCount();

# -----------------------------------------------------------------------------------

# BUILDER PATTERN

// use \Src\Creational\Builder\PizzaBuilder;
// use \Src\Creational\Builder\Pizza;

// $pizzaRecipe  = (new PizzaBuilder(7))
//     ->cheese(true)
//     ->pepperoni(true)
//     ->bacon(true)
//     ->build();

// $order = new Pizza($pizzaRecipe);
// echo $order->show();

# -----------------------------------------------------------------------------------

# PROTOTYPE PATTERN

// use \Src\Creational\Prototype\Student;

// $prototypeStudent = new Student();
// $prototypeStudent->setName('Jay');
// $prototypeStudent->setYear(4);
// $prototypeStudent->setGrade('F');

// $clonedStudent = clone $prototypeStudent;
// $clonedStudent->setName('Jay Rods');
// $clonedStudent->setYear(2);
// $clonedStudent->setGrade('B');
// $clonedStudent->danceSkills = 'Outstanding';
// $clonedStudent->dance = function (string $style) {
//     return "Dancing $style style.";
// };

// var_dump($prototypeStudent);
// var_dump($clonedStudent);
// var_dump($clonedStudent->dance->__invoke('Batchata'));

# -----------------------------------------------------------------------------------

# DECORATOR

// use \Src\Structural\Decorator\EBook;
// use \Src\Structural\Decorator\PrintBook;

// $eBook = new EBook('The Book of Jay', 'Jay Rods', 'Lorem Ipsum - Cum mente et maleo...');

// var_dump($eBook);

// $printBook = new PrintBook('The Book of Jay', 'Jay Rods', 'Lorem Ipsum - Cum mente et maleo...');

// var_dump($printBook);
// var_dump($printBook->getText());

# -----------------------------------------------------------------------------------

# ADAPTERS

# CLASS ADAPTER

// use \Src\Structural\Adapter\ClassAdapter\ATM;
// use \Src\Structural\Adapter\ClassAdapter\ATMWithPhoneTopUp;

// $atm = new ATM(500.00);
// $atm->withdraw(50.00);
// var_dump($atm->getBalance());

// $atmAdapter = new ATMWithPhoneTopUp(500.00);
// var_dump($atmAdapter->getTopUp(50.00, time()));
// var_dump($atmAdapter->getBalance());

# OBJECT ADAPTER

// use \Src\Structural\Adapter\ObjectAdapter\Insurance;
// use \Src\Structural\Adapter\ObjectAdapter\InsuranceMarketCompare;

// $quote = new Insurance(10000, 250);
// var_dump($quote->monthlyPremium());
// var_dump($quote->annualPremium());

// $quote = new InsuranceMarketCompare(10000, 250);
// var_dump($quote->getMonthlyPremium());
// var_dump($quote->getAnnualPremium());

# -----------------------------------------------------------------------------------

# FLYWEIGHT (with Builder Creational Pattern embeed for help manipulate circle attributes)

// use \Src\Structural\FlyWeight\ShapeFactory;

// $colours = array('Green', 'Red', 'Yellow', 'Black', 'Blue', "Pink", 'Purple', 'Brown', 'Orange', 'White', 'Gray');

// $factory = new ShapeFactory();

// for ($i = 0; $i <= 15; $i++) {
//     $randomColour = $colours[array_rand($colours)];

//     $circle = $factory->getCircle($randomColour);
//     $circle->setX(rand(0, 50));
//     $circle->setY(rand(0, 50));
//     $circle->setRadius(rand(0, 10));

//     echo $circle->draw();
// }

// for ($i = 0; $i <= 15; $i++) {
//     $randomColour = $colours[array_rand($colours)];

//     $square = $factory->getSquare($randomColour);
//     $square->setX(rand(0, 50));
//     $square->setY(rand(0, 50));
//     $square->setEdge(rand(0, 50));

//     echo $square->draw();
// }

# -----------------------------------------------------------------------------------

# COMPOSITE

// use \Src\Structural\Composite\Song;
// use \Src\Structural\Composite\Playlist;

// $songOne = new Song("Sweet Child O' Mine");
// $songTwo = new Song("War Pigs");
// $songThree = new Song("Pride and Joy");
// $songFour = new Song("Natural");

// $myFavouriteSongs = new Playlist();
// $myFavouriteSongs->addSong($songOne);
// $myFavouriteSongs->addSong($songTwo);
// $myFavouriteSongs->addSong($songThree);
// $myFavouriteSongs->addSong($songFour);

// $myFavouriteSongs->play();

# -----------------------------------------------------------------------------------

# BRIDGE

// use \Src\Structural\Bridge\Phone;
// use \Src\Structural\Bridge\Tablet;
// use \Src\Structural\Bridge\InstantMessenger;
// use \Src\Structural\Bridge\SMS;

// $sm = new Phone();
// $sm->setSender(new InstantMessenger());
// var_dump($sm->send('Lorem Ipsun et aleo...'));

// $sm->setSender(new SMS());
// var_dump($sm->send('Lorem Ipsun et aleo...'));

// $tablet = new Tablet();
// $tablet->setSender(new InstantMessenger());
// var_dump($tablet->send('Lorem Ipsun et aleo...'));

// $tablet->setSender(new SMS());
// var_dump($tablet->send('Lorem Ipsun et aleo...'));

# -----------------------------------------------------------------------------------

# PROXY

// use \Src\Structural\Proxy\AnimalFeederProxy;

// $cat = new AnimalFeederProxy('Cat', 'Kitty');
// var_dump($cat->displayFood(1));
// var_dump($cat->dropFood(1, true));

// $dog = new AnimalFeederProxy('Dog', 'Anisio');
// var_dump($dog->displayFood(1));
// var_dump($dog->dropFood(1, true));

# -----------------------------------------------------------------------------------

# FACADE

// use \Src\Structural\Facade\ToyFactory;

// $toyShop = new ToyFactory(20, '1 Factory Lane, Oxfordshire', '07 999 888 666');
// $order = $toyShop->processOrder('Rua Manoel Pinto, 70-A, Conselheiro Lafaiete', '+55 31 9 8624 5883');
// var_dump($order);

# -----------------------------------------------------------------------------------

# 

