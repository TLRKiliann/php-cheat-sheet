<?php

namespace Tutoriel\Table;

use \Tutoriel\Tutoriel;

class Article extends Table
{
    protected static $_table = 'articles';

    public static function allArticles()
    {
        return Tutoriel::getDatabase()->query("SELECT articles.id, 
                articles.title, articles.content, articles.date,
                categories.reference as categorie
            FROM " . static::$_table . "
            LEFT JOIN categories
            ON category_id = categories.id
            ", get_called_class()
        );
    }

    public static function getArtByCatId($category_id)
    {
        return Tutoriel::getDatabase()->prepare("SELECT articles.id, 
                articles.title, articles.content, articles.date,
                categories.reference as categorie
            FROM " . static::$_table . "
            LEFT JOIN categories
            ON category_id = categories.id
            WHERE category_id = ?
            ", [$category_id], get_called_class()
        );
    }
}

?>