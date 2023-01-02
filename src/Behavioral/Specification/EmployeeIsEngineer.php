<?php

namespace Src\Behavioral\Specification;

use \Src\Behavioral\Specification\EmployeeSpecification;
use StdClass;

class EmployeeIsEngineer implements EmployeeSpecification
{
    public function isSatisfiedBy(StdClass $customer): bool
    {
        if ($customer->department === "Engineering") {
            return true;
        }
        return false;
    }
}
