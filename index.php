<?php

require_once('vendor/autoload.php');

use \Book\ChapterOne\Example;

$example = new Example();

echo "<pre>";
var_dump($example);
echo "</pre>";
