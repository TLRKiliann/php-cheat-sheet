<?php

namespace Tutoriel\Table;

use Tutoriel\Tutoriel;

// \Core\Table\Table
// or
// use Core\Table\Table;

class Categorie extends Table
{
    protected static $_table = 'categories';

    public static function find($id)
    {
        return Tutoriel::getDatabase()->prepare("SELECT * FROM " . self::$_table . " WHERE id = ?",
            [$id], get_called_class(), true);
    }

    public static function allCategories()
    {
        return Tutoriel::getDatabase()->query("SELECT * FROM " . self::$_table . "",
            get_called_class());
    }
}

?>