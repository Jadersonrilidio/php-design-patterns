<?php

require_once('vendor/autoload.php');

# ADAPTERS

# CLASS ADAPTER

use \Src\Structural\Adapter\ClassAdapter\ATM;
use \Src\Structural\Adapter\ClassAdapter\ATMWithPhoneTopUp;

$atm = new ATM(500.00);
$atm->withdraw(50.00);
var_dump($atm->getBalance());

$atmAdapter = new ATMWithPhoneTopUp(500.00);
var_dump($atmAdapter->getTopUp(50.00, time()));
var_dump($atmAdapter->getBalance());

# OBJECT ADAPTER

use \Src\Structural\Adapter\ObjectAdapter\Insurance;
use \Src\Structural\Adapter\ObjectAdapter\InsuranceMarketCompare;

$quote = new Insurance(10000, 250);
var_dump($quote->monthlyPremium());
var_dump($quote->annualPremium());

$quote = new InsuranceMarketCompare(10000, 250);
var_dump($quote->getMonthlyPremium());
var_dump($quote->getAnnualPremium());
