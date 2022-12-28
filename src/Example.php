<?php

namespace Src;

class Example
{
    private $hiddenVariable = true;
    protected $protectedVariable = true;
    public $publicVariable = true;

    public function __debugInfo()
    {
        // $properties = get_object_vars($this);
        // unset($properties['hiddenVariable'], $properties['protectedVariable']);
        // return $properties;

        return call_user_func('get_object_vars', $this);
    }
}
