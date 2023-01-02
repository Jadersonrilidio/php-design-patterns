<?php

require_once('vendor/autoload.php');

# ITERATOR

use \Src\Behavioral\Iterator\TimeIterator;

$time = new TimeIterator(time());

foreach ($time as $key => $value) {
    var_dump($key, $value);
}
