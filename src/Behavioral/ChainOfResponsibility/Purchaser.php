<?php

namespace Src\Behavioral\ChainOfResponsibility;

interface Purchaser
{
    public function setNextPurchaser(Purchaser $next): bool;

    public function buy(float $price): bool;
}
