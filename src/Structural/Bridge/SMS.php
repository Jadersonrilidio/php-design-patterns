<?php

namespace Src\Structural\Bridge;

use \Src\Structural\Bridge\Messenger;

class SMS implements Messenger
{
    public function send($body)
    {
        return "SMS: " . $body;
    }
}
