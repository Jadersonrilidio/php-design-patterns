<?php

namespace Src\Creational\Factory;

use \Exception;
use \Src\Creational\Factory\NotifierFactory;

class CourierNotifierFactory implements NotifierFactory
{
    public static function getNotifier(string $notifier, string $to)
    {
        if (empty($notifier)) {
            throw new Exception("No notifier passed.");
        }

        switch ($notifier) {
            case "Post":
                return new Post($to);
                break;
            default:
                throw new Exception("Notifier invalid.");
                break;
        }
    }
}
