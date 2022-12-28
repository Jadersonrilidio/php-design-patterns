<?php

namespace Src\Behavioral\Iterator;

use \ArrayIterator;
use \IteratorAggregate;

class TimeIterator implements IteratorAggregate
{
    private $weekAgo;
    private $yesterday;
    private $now;
    private $tomorrow;
    private $nextWeek;

    public function __construct(int $time)
    {
        $this->weekAgo = $time - 604800;
        $this->yesterday = $time - 86400;
        $this->now = $time;
        $this->tomorrow = $time - 86400;
        $this->nextWeek = $time + 604800;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator(array(
            'weekAgo'   => $this->weekAgo,
            'yesterday' => $this->yesterday,
            'now'       => $this->now,
            'tomorrow'  => $this->tomorrow,
            'nextWeek'  => $this->nextWeek
        ));
    }
}
