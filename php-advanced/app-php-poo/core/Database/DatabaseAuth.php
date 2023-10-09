<?php

namespace Core\Database;
use \PDO;

class DatabaseAuth
{
    private $dbname;
    private $host;
    private $port;
    private $username;
    private $password;
    private $pdo;

    public function _construct($dbname, $host = "192.168.18.9",$port = 3306,
        $username = "koala33", $password = "Ko@l@tr3379")
    {
        $this->host = $host;
        $this->port = $port;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
    }

    private function getPDO()
    {
        try {
            $pdo = new PDO("mysql:host=192.168.18.9;port=3306;dbname=mytable;charset=utf8", 
                "koala33", "Ko@l@tr3379"
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $this->pdo = $pdo;
        } catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return $pdo;
    }

    public function query($statment, $class_name)
    {
        $req = $this->getPDO()->query($statment);
        try {
            $data = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        } catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return $data;
    }

    public function prepare($statment, $attributes, $class_name, $one = false)
    {
        $req = $this->getPDO()->prepare($statment);
        $req->execute($attributes);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if ($one)
        {
            $data = $req->fetch();
            var_dump($data);
        }
        else
        {
            $data = $req->fetchAll();
            var_dump($data);
        }
        return $data;
    }
}

?>