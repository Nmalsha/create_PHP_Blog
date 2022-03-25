<?php

class Dbh
{

    private static $instance = null;

    public static function connect()
    {
        if (self::$instance === null) {

            $filename = require ROOT . 'config/config.php';

            self::$instance = new PDO(
                "mysql:host=$filename[0];
               dbname=$filename[1]",
                $filename[2],
                $filename[3]);

        }
        return self::$instance;

    }

}
