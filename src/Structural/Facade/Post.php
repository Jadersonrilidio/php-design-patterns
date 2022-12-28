<?php

namespace Src\Structural\Facade;

class Post
{
    private $sender;

    public function __construct(string $sender)
    {
        $this->sender = $sender;
    }

    public function dispatch(string $item, string $to): bool
    {
        return strlen($item) !== 13 or empty($to) ? false : true;
    }
}
