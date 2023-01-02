<?php

namespace Src\Behavioral\ChainOfResponsibility;

use \Src\Behavioral\ChainOfResponsibility\Purchaser;

class BoardPurchaser implements Purchaser
{
    private $next;
    private $name;
    private $maxValue = 100000;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setNextPurchaser(Purchaser $next): bool
    {
        $this->next = $next;
        return true;
    }

    public function buy(float $price): bool
    {
        if ($price < $this->maxValue) {
            var_dump('Board ' . $this->name . ' purchased.');
            return true;
        }

        if (isset($this->next)) {
            return $this->next->buy($price);
        }

        var_dump('Could not buy.');
        return false;
    }
}
