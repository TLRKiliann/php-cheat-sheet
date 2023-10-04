<?php

namespace Tutoriel\Table;

use Tutoriel\Tutoriel;

class Article
{
    public static function getLast()
    {
        /*
        return Tutoriel::getDatabase()->query('SELECT * FROM articles',
            (__CLASS__) path !!!
            'Tutoriel\Table\Article');
        */
        return Tutoriel::getDatabase()->query('SELECT articles.id, 
                articles.title, articles.content, articles.date,
                categories.reference as categorie
            FROM articles
            LEFT JOIN categories
            ON category_id = categories.id
            ', __CLASS__
        );
    }

    public function __get($key)
    {
        // 
        $method = "get" . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
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