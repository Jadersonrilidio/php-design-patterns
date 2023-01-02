<?php

require_once('vendor/autoload.php');

# SPECIFICATION             (https://martinfowler.com/apsupp/spec.pdf)

# PS: Composite Specifications allow you to combine specifications. By using the AND , NOT , OR and NOR operators you are able to build their respective functions into different specification classes.

use \Src\Behavioral\Specification\EmployeeIsEngineer;

$workers = array();

$workers['A'] = new StdClass();
$workers['A']->title = 'Developer';
$workers['A']->department = 'Engineering';
$workers['A']->salary = 50000;

$workers['B'] = new StdClass();
$workers['B']->title = 'Data Analist';
$workers['B']->department = 'Engineering';
$workers['B']->salary = 30000;

$workers['C'] = new StdClass();
$workers['C']->title = 'Personal Assistant';
$workers['C']->department = 'CEO';
$workers['C']->salary = 25000;

$isEngineer = new EmployeeIsEngineer();

foreach ($workers as $id => $worker) {
    if ($isEngineer->isSatisfiedBy($worker)) {
        var_dump($id, $worker);
    }
}
