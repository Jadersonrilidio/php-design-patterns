<?php

require_once('vendor/autoload.php');

# GENERAL TESTS

use \Src\Example;
use \Src\Environment;

$example = new Example();
var_dump($example); // hide private attributes not successful

Environment::start();
var_dump(getenv('TEST_ENV_VARS'));
