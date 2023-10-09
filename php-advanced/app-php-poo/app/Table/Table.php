<?php

namespace Tutoriel\Table;
// We are in class Tutoriel\Table\Table;

//use Tutoriel\Database\Database;

class Table
{

    protected $table;
    //protected $db;

    // possible to be called from index.php by :
    // var_dump(Tutoriel\Tutoriel::getTable('categories'));
    // stock db into instance
    // \Tutoriel\Database\Database $db
    public function __construct()
    {
        //$this->db = $db;
        if (is_null($this->table))
        {
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name));
        }
    }

    public function __get($key)
    {
        $method = "get" . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public function getUrlCat()
    {
        return "index.php?p=categorie&id=" . $this->id;
    }

    public function getExtractCat()
    {
        $html = "<p>" . $this->reference . "</p>";
        $html = '<p><a href="' . $this->getUrlCat() . '"><a/></p>';
        return $html;
    }

    public function getUrlArt()
    {
        return "index.php?p=article&id=" . $this->id;
    }

    public function getExtractArt()
    {
        $html = "<p>" . $this->content . "</p>";
        $html = '<p><a href="' . $this->getUrlArt() . '">Lire la suite...<a/></p>';
        return $html;
    }
}

?>