<?php

namespace Src\Behavioral\Specification;

use \StdClass;

interface EmployeeSpecification
{
    public function isSatisfiedBy(StdClass $customer): bool;
}
