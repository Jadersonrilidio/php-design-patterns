<?php

namespace Src\Structural\Bridge;

use \Src\Structural\Bridge\Messenger;

interface Transmitter
{
    public function setSender(Messenger $sender);

    public function send($body);
}
