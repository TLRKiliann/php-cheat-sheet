<?php

namespace Tutoriel;

use Tutoriel\Database\MysqlDatabase; // chgment
use Tutoriel\Configuration;

class Tutoriel
{
    /*
    const DB_NAME = "mytable";
    const DB_USER = 'koala33';
    const DB_PASS = 'Ko@l@tr3379';
    const DB_HOST = '192.168.18.9';
    const DB_PORT = 3306;
    */
    
    private static $_instance;
    //private static $_db;
    public static $_title = "FuturaSite";

    // public static function getDatabase()
    // {
    //     if (self::$_db === null)
    //     {
    //         self::$_db = new Database(self::DB_NAME, self::DB_USER, 
    //             self::DB_PASS, self::DB_HOST, self::DB_PORT);
    //     }
    //     //var_dump(self::$_db);
    //     return self::$_db;
    // }

    public static function getDatabase()
    {
        // $config = Configuration::getInstance(ROOT . '/config/config.php');
        $config = Configuration::getInstance();
        if (is_null(self::$_instance))
        {
            //self::$_instance = new Database\MysqlDatabase($config->get('db_user'), 
            self::$_instance = new MysqlDatabase($config->get('db_user'), 
                $config->get('db_password'), $config->get('db_host'), 
                $config->get('db_port'), $config->get('db_name'));
        }
        return self::$_instance;
    }

    // $app = Tutoriel\Tutoriel::getInstance();
    public static function getInstance()
    {
        if(is_null(self::$_instance))
        {
            self::$_instance = new Tutoriel();
        }
        return self::$_instance;
    }

    /**
     * possible to be called from index.php by :
     * var_dump(Tutoriel\Tutoriel::getTable('categories'));
     * var_dump(Tutoriel\Tutoriel::getTable('articles'));
     * @params string
     * @return object 
    */
    public function getTable($name)
    {
        $class_name = '\\Tutoriel\\Table\\' . ucfirst($name) . 'Table';
        return new $class_name($this->getDatabase());
        //return new $class_name();
    }

    // Versatil Autoloader
    public static function load()
    {
        session_start();
        require ROOT . '/app/Autoloader.php';
        Tutoriel\Autoloader::register();
        require ROOT . '/core/Autoloader.php';
        Core\Autoloader::register();
    }

    public static function getTitle()
    {
        return self::$_title;
    }

    public static function setTitle($_title)
    {
        return self::$_title = $_title;
    }

    public static function notFound()
    {
        header("HTTP/2.0 404 Not Found");
        header("Location:index.php?p=404");
        die("Not found, sorry");
    }

    public static function forbidden()
    {
        header('HTTP/1.0 403 Forbidden');
        die("Accès interdit !");
    }
}

?>