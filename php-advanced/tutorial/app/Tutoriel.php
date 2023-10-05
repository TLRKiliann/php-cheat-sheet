<?php

namespace Tutoriel;

class Tutoriel
{
    const DB_NAME = "mytable";
    const DB_USER = 'XXXXXX';
    const DB_PASS = 'XXXXXX';
    const DB_HOST = '192.168.XX.XX';
    const DB_PORT = XXXXXX;

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

    public static function notFound()
    {
        header("HTTP/2.0 404 Not Found");
        header("Location:index.php?p=404");
        return;
    }
}

?>