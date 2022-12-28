<?php

namespace Src\Behavioral\Observer;

use \SplObserver;
use \SplSubject;

class Reader implements SplObserver
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(SplSubject $subject): void
    {
        echo $this->name . ' is reading an article ' . $subject->getContent() . '<br>';
    }
}
