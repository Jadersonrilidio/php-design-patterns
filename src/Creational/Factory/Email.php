<?php

namespace Src\Creational\Factory;

use \Src\Creational\Factory\Notifier;
use \Exception;

class Email extends Notifier
{
    private $from;

    public function __construct(string $to, string $from)
    {
        parent::__construct($to);

        if (isset($from)) {
            $this->from = $from;
        } else {
            $this->from = "Anonimous";
        }
    }

    public function validateTo(): bool
    {
        $isEmail = filter_var($this->to, FILTER_VALIDATE_EMAIL);

        return $isEmail ? true : false;
    }

    public function sendNotification(): string
    {
        if ($this->validateTo() === false) {
            throw new Exception("Invalid email address.");
        }

        $notificationType = get_class($this);
        return "This is a " . $notificationType . " to " . $this->to . " from " . $this->from . ".";
    }
}
