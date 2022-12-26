<?php

namespace Src\Creational\Factory;

use \Src\Creational\Factory\Notifier;
use \Exception;

class Post extends Notifier
{
    public function validateTo(): bool
    {
        $address = explode(',', $this->to);

        if (count($address) !== 2)
            return false;

        return true;
    }

    public function sendNotification(): string
    {
        if ($this->validateTo() === false) {
            throw new Exception("Invalid postal address.");
        }

        $notificationType = get_class($this);
        return "This is a " . $notificationType . " to " . $this->to . ".";
    }
}
