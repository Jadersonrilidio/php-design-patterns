<?php

namespace Src\Creational\Factory;

interface NotifierFactory
{
    public static function getNotifier(string $notifier, string $to);
}
