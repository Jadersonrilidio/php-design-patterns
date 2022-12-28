<?php

namespace Src\Structural\Bridge;

use \Src\Structural\Bridge\Device;

class Tablet extends Device
{
    public function send($body)
    {
        $body .= "\n\n Sent from a tablet.";

        return $this->sender->send($body);
    }
}
