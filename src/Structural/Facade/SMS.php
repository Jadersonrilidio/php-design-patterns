<?php

namespace Src\Structural\Facade;

class SMS
{
    private $from;

    public function __construct(string $from)
    {
        $this->from = $from;
    }

    public function send(string $to, string $message): bool
    {
        return strlen($message) === 0 or empty($to) ? false : true;
    }
}
