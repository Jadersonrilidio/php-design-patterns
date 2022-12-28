<?php

namespace Src\Structural\Proxy;

class AnimalFeederProxy
{
    protected $instance;

    public function __construct(string $feeder, string $petName)
    {
        $class = "\\" . __NAMESPACE__ .  "\\" . $feeder;

        $this->instance = new $class($petName);
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->instance, $name], $arguments);
    }
}
