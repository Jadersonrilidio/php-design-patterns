<?php

require_once('vendor/autoload.php');

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

var_dump($prototypeStudent);
var_dump($clonedStudent);
var_dump($clonedStudent->dance->__invoke('Batchata'));
