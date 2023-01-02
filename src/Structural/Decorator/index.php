<?php

require_once('vendor/autoload.php');

# DECORATOR

use \Src\Structural\Decorator\EBook;
use \Src\Structural\Decorator\PrintBook;

$eBook = new EBook('The Book of Jay', 'Jay Rods', 'Lorem Ipsum - Cum mente et maleo...');
$printBook = new PrintBook('The Book of Jay', 'Jay Rods', 'Lorem Ipsum - Cum mente et maleo...');

var_dump($eBook);
var_dump($printBook);
var_dump($printBook->getText());
