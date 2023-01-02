<?php

namespace Src\Behavioral\Strategy;

interface Power
{
    public function raise(int $number): int;
}
