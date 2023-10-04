# PHP MVC POO

## DB

----------------------------------------------------+---------------------+-------------+
| id | title     | content                      | date                | category_id |
-------------------------------------------------------------+---------------------+-------------+
|  1 | Sport     | Le dernier match a agité les foules. Les prolongations se sont terminées tardivement.                                    | 2017-06-15 09:34:21 |           2 |
|  2 | Sport     | Les joueures étaient là et les émotions aussi!                                          | 2019-06-25 10:34:21 |           2 |
|  3 | Politique | Rien ne va plus, sans surprise...| 2022-10-25 14:34:21 |           1 |
|  4 | Politique | La chute de la dictature est proche.                                          
                                                 | 2023-03-25 14:34:21 |           1 |
--------------------------------------------------------------+---------------------+-------------+
4 rows in set (0.002 sec)

MariaDB [mytable]> SELECT * FROM categories;
+----+------------+
| id | reference  |
+----+------------+
|  1 | Geographie |
|  2 | Football   |
+----+------------+
2 rows in set (0.001 sec)

## Injection SQL :

!!! Very dangerous !!!
$post = $db->query('SELECT * FRM post WHERE $_GET['id']');

GOOD PRACTICE !
$post = $db->prepare('SELECT * FRM post WHERE id = ?', [$_GET['id']]);
