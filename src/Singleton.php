<?php

namespace Book\ChapterOne;

class Singleton
{
    private static $instance;

    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    protected function __construct()
    {
        //
    }

    private function __clone()
    {
        //
    }

    private function __wakeup()
    {
        //
    }
}
