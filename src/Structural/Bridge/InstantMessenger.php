<?php

namespace Src\Structural\Bridge;

use \Src\Structural\Bridge\Messenger;

class InstantMessenger implements Messenger
{
    public function send($body)
    {
        return "InstantMessenger: " . $body;
    }
}
