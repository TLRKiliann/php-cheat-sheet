<?php

namespace Tutoriel\Database;

use \PDO;

class MysqlDatabase extends Database
{
    private $dbname;
    private $host;
    private $port;
    private $username;
    private $password;
    private $pdo;

    public function _construct($dbname, $host = "XXXX.XXXX.XXXX.XXXX", $port = XXXX,
        $username = "koala33", $password = "XXXX")
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
            $pdo = new PDO("mysql:host=XXXX.1XXXX68.XXXX.XXXX;port=XXXX;dbname=mytable;charset=utf8", 
                "XXXX", "XXXX"
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $this->pdo = $pdo;
        } catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return $pdo;
    }

    public function query($statment, $class_name = null, $one = false)
    {
        $req = $this->getPDO()->query($statment);
        try {
            if ($class_name === null)
            {
                $data = $req->fetchAll(PDO::FETCH_CLASS);
            }
            else
            {
                $data = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
            }
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
        }
        else
        {
            $data = $req->fetchAll();
        }
        return $data;
    }
}

?>