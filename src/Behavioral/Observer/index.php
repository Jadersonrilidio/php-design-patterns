<?php

require_once('vendor/autoload.php');

# OBSERVER

use \Src\Behavioral\Observer\Feed;
use \Src\Behavioral\Observer\Reader;

$josh = new Reader('Josh Rods');
$jay = new Reader('Jay Rods');
$jane = new Reader('Jane Rods');

$breakOutNews = new Feed('PHP Magazine');

$breakOutNews->attach($josh);
$breakOutNews->attach($jay);
$breakOutNews->attach($jane);

$breakOutNews->breakOutNews("I'm nailing it!");
