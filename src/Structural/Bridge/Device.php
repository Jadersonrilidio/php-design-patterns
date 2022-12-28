<?php

namespace Src\Structural\Bridge;

use \Src\Structural\Bridge\Messenger;
use \Src\Structural\Bridge\Transmitter;

abstract class Device implements Transmitter
{
    protected $sender;

    public function setSender(Messenger $sender)
    {
        $this->sender = $sender;
    }
}
