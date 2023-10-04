<?php

namespace Tutoriel;
use \PDO;

class Database
{
    private $dbname;
    private $host;
    private $port;
    private $username;
    private $password;
    private $pdo;

    public function _construct(
        $dbname,
        $host = "192.168.XX.XX",
        $port = XXXX,
        $username = "XXXX",
        $password = "XXXX"
    )
    {
        $this->host = $host;
        $this->port = $port;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
    }

    private function getPDO()
    {
        if ($this->pdo === null)
        {
            try {
                $pdo = new PDO("mysql:host=192.168.XX.XX;port=XXXX;dbname=mytable;charset=utf8", 
                    "XXXX", "XXXX", array(
                        PDO::ATTR_PERSISTENT => true
                    )
                );
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                $this->pdo = $pdo;
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
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
        }
        else
        {
            $data = $req->fetchall();
        }
        return $data;
    }
}

?>