<?php
// home.php
namespace Tutoriel;

class Configuration
{
    private $settings = [];
    private static $_instance;
    private $_id;

    // call that in index.php with :
    // $config = new Tutoriel\Configuration();
    // var_dump($config);
    public function __construct()
    {
        $this->_id = uniqid();
        $this->settings = require 'config/config.php';
    }
    
    // this is a singleton
    // var_dump(Tutoriel\Configuration::getInstance());
    // in index.php
    public static function getInstance()
    {
        if (is_null(self::$_instance))
        {
            self::$_instance = new Configuration();
        }
        return self::$_instance;
    }

    public function get($key)
    {
        if (!isset($this->settings[$key]))
        {
            return null;
        }
        return $this->settings[$key];
    }
}

?>