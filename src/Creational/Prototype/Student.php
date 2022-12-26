<?php

namespace Src\Creational\Prototype;

class Student
{
    public $name;
    public $year;
    public $grade;

    public function __construct()
    {
        echo "You constructed a Student object!";
    }

    public function __clone()
    {
        echo "You cloned a Student object!";
    }

    public function __invoke(string $name = '')
    {
        echo "You $name invoked Student object as a function!";
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setyear(int $year)
    {
        $this->year = $year;
    }

    public function setGrade(string $grade)
    {
        $this->grade = $grade;
    }
}
