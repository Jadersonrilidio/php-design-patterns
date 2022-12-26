<?php

namespace Src\Creational\Factory;

use \Src\Creational\Factory\Notifier;
use \Exception;

class SMS extends Notifier
{
    const PHONE_NUMBER_PATTERN = '/^(\+44\s?7\d{3}|\(?07\d{3}\)?)\s?\d{3}\s?\d{3}$/';

    public function validateTo(): bool
    {
        $isPhone = preg_match(self::PHONE_NUMBER_PATTERN, $this->to);

        return $isPhone ? true : false;
    }

    public function sendNotification(): string
    {
        if ($this->validateTo() === false) {
            throw new Exception("Invalid phone number.");
        }

        $notificationType = get_class($this);
        return "This is a " . $notificationType . " to " . $this->to . ".";
    }
}
