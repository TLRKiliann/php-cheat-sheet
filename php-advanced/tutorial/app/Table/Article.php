<?php

namespace Tutoriel\Table;

use Tutoriel\Tutoriel;

class Article extends Table
{
    public static function getLast()
    {
        /*
        return Tutoriel::getDatabase()->query('SELECT * FROM articles',
            (__CLASS__) path !!!
            'Tutoriel\Table\Article'); (__CLASS__)
        */
        return Tutoriel::getDatabase()->query('SELECT articles.id, 
                articles.title, articles.content, articles.date,
                categories.reference as categorie
            FROM articles
            LEFT JOIN categories
            ON category_id = categories.id
            ', get_called_class()
        );
    }
}

?>