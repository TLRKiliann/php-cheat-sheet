<?php

namespace Tutoriel\Table;

use Tutoriel\Tutoriel;

class Table
{
    public static function find($id)
    {
        return Tutoriel::getDatabase()->prepare("SELECT * FROM categories WHERE id = ?",
            [$id], 
            get_called_class(), true);  
    }

    public static function getArtByCatId($category_id)
    {
        return Tutoriel::getDatabase()->prepare('SELECT articles.id, 
                articles.title, articles.content, articles.date,
                categories.reference as categorie
            FROM articles
            LEFT JOIN categories
            ON category_id = categories.id
            WHERE category_id = ?
            ', [$category_id], get_called_class()
        );
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
        $html = '<p><a href="'.$this->getUrlCat().'">Lire la CATEGORIE...<a/></p>';
        return $html;
    }

    public function getUrl()
    {
        return "index.php?p=article&id=" . $this->id;
    }

    public function getExtract()
    {
        // substr( , 0, 5)
        $html = "<p>" . $this->content . "</p>";
        $html = '<p><a href="'.$this->getUrl().'">Lire la suite...<a/></p>';
        return $html;
    }
}

?>