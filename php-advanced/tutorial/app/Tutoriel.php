<?php

namespace Tutoriel;

class Tutoriel
{
    const DB_NAME = "mytable";
    const DB_USER = 'XXXX';
    const DB_PASS = 'XXXX';
    const DB_HOST = '192.168.XX.XX';
    const DB_PORT = XXXX;

    private static $database;

    public static function getDatabase()
    {
        if (self::$database === null)
        {
            self::$database = new Database(self::DB_NAME, self::DB_USER, 
                self::DB_PASS, self::DB_HOST, self::DB_PORT);
        }
        return self::$database;
    }
}

?>