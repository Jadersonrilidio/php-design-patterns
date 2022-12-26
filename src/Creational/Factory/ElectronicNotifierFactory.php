<?php

namespace Src\Creational\Factory;

use \Exception;
use \Src\Creational\Factory\NotifierFactory;

class ElectronicNotifierFactory implements NotifierFactory
{
    public static function getNotifier(string $notifier, string $to)
    {
        if (empty($notifier)) {
            throw new Exception("No notifier passed.");
        }

        switch ($notifier) {
            case "SMS":
                return new SMS($to);
                break;
            case "Email":
                return new Email($to, 'Junade');
                break;
            default:
                throw new Exception("Notifier invalid.");
                break;
        }
    }
}
