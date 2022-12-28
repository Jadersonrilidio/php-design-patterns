<?php

namespace Src\Structural\Bridge;

use \Src\Structural\Bridge\Device;

class Phone extends Device
{
    public function send($body)
    {
        $body .= "\n\n Sent from a phone.";

        return $this->sender->send($body);
    }
}
