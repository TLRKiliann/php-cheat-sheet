<?php
namespace includes;

use PDO;
use PDOException;

final class Db{
    
    private static $_connect;
    
    private function __construct(){}
    
    public static function connect( $config )
    {
        if( !isset( self::$_connect ) )
        {        
            $dsn = $config['dbbase'].':host='.$config['dbhost'].';port='.$config['dbport'].';dbname='.$config['dbname'].';charset='.$config['dbcharset'].';';
            
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            
            try 
            {
                self::$_connect = new PDO($dsn, $config['dbuser'], $config['dbpass'], $options);
            }
            catch( PDOException $e )
            {
                throw new PDOException($e->getMessage(), (int)$e->getCode());
                
                exit;
            }
        }
        
        return self::$_connect;
    }
    
    public static function db()
    {
        return self::$_connect;
    }
}