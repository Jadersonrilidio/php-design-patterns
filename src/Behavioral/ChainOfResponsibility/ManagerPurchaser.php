<?php

namespace Src\Behavioral\ChainOfResponsibility;

use \Src\Behavioral\ChainOfResponsibility\Purchaser;

class ManagerPurchaser implements Purchaser
{
    private $next;
    private $name;
    private $maxValue = 500;

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
            var_dump('Manager ' . $this->name . ' purchased.');
            return true;
        }

        if (isset($this->next)) {
            return $this->next->buy($price);
        }

        var_dump('Could not buy.');
        return false;
    }
}
