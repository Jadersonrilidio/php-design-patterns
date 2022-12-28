<?php

namespace Src\Structural\Adapter\ObjectAdapter;

use \Src\Structural\Adapter\ObjectAdapter\MarketCompare;
use \Src\Structural\Adapter\ObjectAdapter\Insurance;

class InsuranceMarketCompare implements MarketCompare
{
    private $premium;

    public function __construct(float $limit, float $excess)
    {
        $this->premium = new Insurance($limit, $excess);
    }

    public function getMonthlyPremium(): float
    {
        return $this->premium->monthlyPremium();
    }

    public function getAnnualPremium(): float
    {
        return $this->premium->annualPremium();
    }
}
