# PHP MVC POO

## Intro

Hello, my pseudo is ko@l@tr33. I'm a web dev. After working with React, NextJS, Sveltekit, VueJS,
I've decided to return in php native code back.

This app has been built with php POO & MVC design pattern.

I've used mysql, with a MariaDB database in LAN. For remote access, be sure to configure correctly your firewall on client & server machines ! You can use ufw or iptables on linux.

- Only permit ip connection from remote machine (client & server) & associated port.
- Don't forget to activate port forwarding of your server.
- Finally, configure Tutoriel.php & Database.php with your own properties of your db.

## Run app

- If you want to verify mysql tables after created them :

`$ mysql -u username -p`
Enter passord:

- Into your public folder, run php server :

`$ php -S localhost:8000`


## DB

2 tables are required for this app with foreign keys (articles => category_id). 

```
MariaDB [mytable]> SELECT * FROM articles;
----------------------------------------------------+---------------------+-------------+
| id | title     | content                      | date                | category_id |
----------------------------------------------------+---------------------+-------------+
|  1 | Sport     | Le dernier match a agité les foules. Les prolongations se sont terminées tardivement.                                    | 2017-06-15 09:34:21 |            2 |
|  2 | Sport     | Les joueures étaient là et les émotions aussi!                                          | 2019-06-25 10:34:21 |                                                              2 |
|  3 | Politique | Rien ne va plus, sans surprise...
                                                | 2022-10-25 14:34:21 |            1 |
|  4 | Politique | La chute de la dictature est proche.                                          
                                                | 2023-03-25 14:34:21 |            1 |
----------------------------------------------------+---------------------+-------------+
4 rows in set (0.002 sec)

MariaDB [mytable]> SELECT * FROM categories;
+----+------------+
| id | reference  |
+----+------------+
|  1 | Geographie |
|  2 | Football   |
+----+------------+
2 rows in set (0.001 sec)
```

## Injection SQL

!!! Very dangerous !!!
$post = $db->query("SELECT * FROM post WHERE $_GET['id']");

GOOD PRACTICE !
$post = $db->prepare("SELECT * FROM post WHERE id=[$_GET['id']"]);

---

## Request with PDO

I've made my choice for MySQL db. I use it in remote with mariadb.

- Basic knowledge arround PDO & requests :

We need to instanciate PDO class at first. Then, we can use query(), prepare().

`$pdo = new PDO(dsn);` (dsn = Data Source Name)

`$pdo = new PDO("mysql:host=XX.XX.XX.XX;port=XXXX;dbname=name_table;charset=utf8", "XXXXXXXX", "XXXXXXX");`

setAttribute()

- Tutoriel = main app - functions are called by tables.
- Tables are called from pages.
- Configuration with config/config.php = instanciated only one time the configuration for server.
- MySQLDatabase = instanciate PDO and contains query() & prepare() fn().

# Synthax

- with absolute path : \Core\Entity
- with use : use Core\Entity;

## substr - strlen

`$truc = substr($_table, 0, strlen($_table)-1);`

---

## ucfirst()

```
    $class_name = '\\Tutoriel\\Table\\' . utcfirst($name) . 'Table';
    return $class_name;
```

---

## Factory

app/Tutoriel.php + app/Table/Table.php + app/Database.php

With singleton of Tutoriel class (look at next part "Singleton") :

```
(public/index.php)

$app = Tutoriel\Tutoriel::getInstance();

$categories = $app->getTable('categories');
$articles = $app->getTable('articles');
```

```
class Tutoriel
{
    public static function getTable($name)
    {
        $class_name = '\\Tutoriel\\Table\\' . utcfirst($name) . 'Table';
        return $class_name;
    }
}
```

utcfirst() = uppertocase of $var.

So, we can call it from index.php like that :

```
$posts = Tutoriel\Tutoriel::getTable('Categorie');

or

$app = Tutoriel\Tutoriel::getInstance();

$article = $app->getTable('Article');
$category = $app->getTable('Categorie');
```

Another manner :

```
class Table
{
    protected $table;

    public function __construct()
    {
        if (is_null($this->table))
        {
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name));
        }
    }
}
```

---

## Singleton

- Advantage is to load your instance from everywhere.
- That's a class which is instanciated only one time.
- No changes such as configuration of app.

Configuration.php contains Singleton. It works with config/config.php & home.php.

---

## Dependance Injection

```
(app/Database/MysqlDatabase.php)
(app/Database/Database.php)

(Table.php in Table folder)

public function __construct(Tutoriel\Database\Database $db)
{
    $this->db = $db;
    if (is_null($this->table))
    {
        $parts = explode('\\', get_class($this));
        $class_name = end($parts);
        $this->table = strtolower(str_replace('Table', '', $class_name));
    }
}
```

---

## Static class

With static class, we coudn't have construtor & it's very complex to make heritage with static class.

In this case, it's indicate to use Singleton !

- Call static function or property from parent class.

`static::`

- Call static into the class.

`self::`

---

## class heritage with static (Table)

*Static help us to obtain the right name of actual location class*

Replace: self::$xname by static::$xname
Replace: self::getSome() by static::getSome()
Replace: __CLASS__ by get_called_class()

*__CLASS__ & get_called_class()*

Depends of son class. If the heritage class treats 
properties from 2 sons class.

- `__CLASS__ & get_called_class()` : are called by their own class.
- `__CLASS__` : normal function
- `get_called_class()` : static function


## Namespace

```
class Article
{
    public function all()
    {
        return Tutoriel::getDatabase()->query('SELECT * FROM articles',
            'Tutoriel\Table\Article');
    }
}
```

*Autoloading is required when multiples class are located in same namespace !*

example :
- namespace Tutoriel\Table\Categories;
- namespace Tutoriel\Table\Articles;
- namespace Tutoriel\Table\OtherClass;


use 'OtherClass' :
------------------

```
namespace Tutoriel\Table;

use Tutoriel\Table\OtherClass;

class Article 
{
    public function all()
    {
        return Tutoriel::getDatabase()->query('SELECT * FROM articles',
            'OtherClass');
    }
}
```

With static function :

- `static::function` or `property` called from parent class.
- `self::function` or `property` if into the class.

```
namespace Tutoriel\Table;

use Tutoriel\Table\OtherClass;

class Article 
{
    public function all()
    {
        return Tutoriel::getDatabase()->query('SELECT * FROM articles',
            static::'property');
    }
}
```

## Access to self class

```
class Article extends Table 
{
    public static function all()
    {
        return Tutoriel::getDatabase()->query('SELECT * FROM articles',
            'Tutoriel\Table\Article');     // <--- Here !
    }
}
```

Can be replaced by :

```
class Article extends Table 
{
    public function all()
    {
        return Tutoriel::getDatabase()->query('SELECT * FROM articles',
            __CLASS__);     // <--- Here !
    }
}
```

When function is static :

```
class Article extends Table 
{
    public static function all()
    {
        return Tutoriel::getDatabase()->query('SELECT * FROM articles',
            get_called_class());     // <--- Here !
    }
}
```