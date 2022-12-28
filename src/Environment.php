<?php

namespace Src;

use \Exception;

class Environment
{
    public static function start()
    {
        if (!$fp = fopen('./.env', 'r')) {
            throw new Exception('File not found!');
        }

        while ($assignment = fgets($fp)) {
            putenv($assignment);
        }

        if (!feof($fp)) {
            throw new Exception('PHP EOL not found! - fail!');
        }

        fclose($fp);
    }
}
