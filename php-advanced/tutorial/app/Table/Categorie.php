<?php

namespace Tutoriel\Table;

use Tutoriel\Tutoriel;

class Categorie extends Table
{
    protected static $_table = 'categories';
    
    public static function allCategories()
    {
        return Tutoriel::getDatabase()->query("SELECT * FROM " . static::$_table . "",
            get_called_class());
    }
}


?>