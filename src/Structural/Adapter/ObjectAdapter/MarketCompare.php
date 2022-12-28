<?php

namespace Src\Structural\Adapter\ObjectAdapter;

interface MarketCompare
{
    public function __construct(float $limit, float $excess);

    public function getMonthlyPremium();

    public function getAnnualPremium();
}
