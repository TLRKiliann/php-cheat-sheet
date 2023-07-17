
# include and require Statements

Il est possible d'insérer le contenu d'un fichier PHP dans un autre fichier PHP 
(avant que le serveur ne l'exécute), avec l'instruction include ou require.

Les instructions include et require sont identiques, sauf en cas d'échec :

	+ require produira une erreur fatale (E_COMPILE_ERROR) et arrêtera le script
	+ include ne produira qu'un avertissement (E_WARNING) et le script continuera.

Donc, si vous voulez que l'exécution se poursuive et que les utilisateurs puissent voir la sortie, même si le fichier include est manquant, utilisez la commande 
le fichier include est manquant, utilisez l'instruction include. Sinon, dans le cas de 
d'un FrameWork, d'un CMS, ou du codage d'une application PHP complexe, utilisez toujours l'instruction 
require pour inclure un fichier clé dans le flux d'exécution. Cela vous permettra d'éviter de compromettre le bon fonctionnement de votre application. 
d'éviter de compromettre la sécurité et l'intégrité de votre application, juste 
au cas où un fichier clé serait accidentellement manquant.

L'inclusion de fichiers permet d'économiser beaucoup de travail. Cela signifie que vous pouvez créer un 
un fichier d'en-tête, de pied de page ou de menu standard pour toutes vos pages web. Ensuite, lorsque 
Lorsque l'en-tête doit être mis à jour, il vous suffit de mettre à jour le fichier d'inclusion de l'en-tête. 
de l'en-tête.

--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---

# use & namespace (use with traits, name)

Créer un trait & l'utiliser dans une class :

```
<?php
trait message1 {
  public function msg1() {
    echo "OOP is fun! ";
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>
```

Le mot-clé use a deux objectifs : il indique à une classe d'hériter d'un trait et il donne un alias à un espace de noms. 
et il donne un alias à un espace de noms.

--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---

# namespace

PHP Namespaces

Les espaces de nommage sont des qualificatifs qui résolvent deux problèmes différents :

Ils permettent une meilleure organisation en regroupant les classes qui travaillent ensemble 
pour effectuer une tâche.
Ils permettent d'utiliser le même nom pour plusieurs classes.
Par exemple, vous pouvez avoir un ensemble de classes qui décrivent un tableau HTML, 
comme Table, Row et Cell, tout en ayant un autre ensemble de classes pour 
pour décrire un meuble, comme Table, Chair et Bed. Les espaces de nommage peuvent être utilisés 
pour organiser les classes en deux groupes différents tout en évitant que les deux classes 
les deux classes Table et Table ne soient pas confondues.

Les constantes, classes et fonctions déclarées dans ce fichier appartiendront 
à l'espace de noms Html :

```
<?php
namespace Html;

class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

<!DOCTYPE html>
<html>
<body>

<?php
$table->message();
?>

</body>
</html>
```

---

Utilisez les classes de l'espace de noms Html sans avoir besoin du Html\qualificatif :

```
<?php
namespace Html;
$table = new Table();
$row = new Row();
?>
```

---

Il peut être utile de donner à un espace de noms ou à une classe un alias pour 
faciliter l'écriture. Cela se fait avec le mot clé `use`:

Exemple
Attribuez un alias à un espace de noms :

```
<?php
use Html as H;
$table = new H\Table();
?>
```

---

Donnez un alias à une classe :

```
<?php
use Html\Table as T;
$table = new T();
?>
```

--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---

# constructor

Le constructeur (`__construct()`) est une méthode (fonction) qui à pour rôle 
d'initier des opérations dès que la classe est instanciée (lors de la 
déclaration d'un objet ($new = new class();)). 

--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---

# destructor

Le destructeur (`__destruct()`) s'exécute de toute façon à la fin de la class.
On va utiliser la syntaxe function `__destruct()` pour créer un destructeur. 
Notez qu’à la différence du constructeur, il est interdit de définir des 
paramètres dans un destructeur.

La méthode destructeur va permettre de nettoyer les ressources avant que 
PHP ne libère l’objet de la mémoire.

Ici, vous devez bien comprendre que les variables-objets, comme n’importe 
quelle autre variable « classique », ne sont actives que durant le temps 
d’exécution du script puis sont ensuite détruites.

Cependant, dans certains cas, on voudra pouvoir effectuer certaines actions 
juste avant que nos objets ne soient détruits comme par exemple sauvegarder 
des valeurs de propriétés mises à jour ou fermer des connexions à une base 
de données ouvertes avec l’objet.

Dans ces cas-là, on va pouvoir effectuer ces opérations dans le destructeur 
puisque la méthode destructeur va être appelée automatiquement par le PHP 
juste avant qu’un objet ne soit détruit.

--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---

# Class Constants

Constants cannot be modified once they have been declared.

Class constants can be useful for defining constant data within a class.

A class constant is declared inside a class with the `const` keyword.

Class constants are case-sensitive. However, it is recommended to name in uppercase.

We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the name of the constant, as shown here:


```
<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>
```

--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---

# abstraction des classes (et interfaces)

Une classe abstraite est une classe qui contient au moins une méthode abstraite, 
c'est-à-dire une méthode qui ne contient aucun code réel, juste le nom et les 
paramètres, et qui a été marquée comme "abstraite".

L'objectif est de fournir une sorte de modèle dont on peut hériter et de forcer 
la classe qui hérite à implémenter les méthodes abstraites.

Une classe abstraite se situe donc entre une classe normale et une interface pure. 
Les interfaces sont également un cas particulier de classes abstraites où TOUTES 
les méthodes sont abstraites.

--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---

# autochargement de classes

De nombreux développeurs qui écrivent des applications orientées objet créent un 
fichier source par définition de classe. Un des plus gros inconvénients de cette 
méthode est d'avoir à écrire une longue liste d'inclusions de fichier de classes 
au début de chaque script : une inclusion par classe.

La fonction `spl_autoload_register()` enregistre un nombre quelconque de chargeurs 
automatiques, ce qui permet aux classes et aux interfaces d'être automatiquement 
chargées si elles ne sont pas définies actuellement. En enregistrant des 
autochargeurs, PHP donne une dernière chance d'inclure une définition de classe 
ou interface, avant que PHP n'échoue avec une erreur.

Toute construction similaire à des classes peuvent être autochargées de la même 
manière. Ceci inclut les classes, interfaces, trait, et énumérations.

### Attention

Antérieur à PHP 8.0.0, il était possible d'utiliser `__autoload()` pour autocharger 
les classes et interfaces. Cependant c'est une alternative moins flexible à 
`spl_autoload_register()` et `__autoload()` est obsolète à partir de PHP 7.2.0, et 
supprimée à partir de PHP 8.0.0.

--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---

# Interfaces (interface, `__construct()`, implements, extends, public method)

(Iterable, Cacheable, Renderable, etc)

Les interfaces objet vous permettent de créer du code qui spécifie quelles méthodes 
une classe doit implémenter, sans avoir à définir comment ces méthodes fonctionneront. 
Les interfaces partagent l'espace de nom avec les classes et les traits, donc elles ne 
peuvent pas utiliser le même nom.

Les interfaces sont définies de la même façon que pour une classe, mais en utilisant le 
mot-clé interface à la place de class, et sans qu'aucune des méthodes n'ait son contenu 
de spécifié.

De par la nature même d'une interface, toutes les méthodes déclarées dans une interface 
doivent être publiques.

## En pratique les interfaces servent deux rôles complémentaires :

Permettre aux développeurs de créer des objets de classes différentes qui peuvent être 
utilisées de façon interchangeables, car elles implémentent la ou les mêmes interfaces. Un 
exemple commun sont plusieurs services d'accès à des bases de données, plusieurs 
gestionnaires de paiement ou différentes stratégies de cache. Différentes implémentations 
peuvent être échangées sans nécessiter des changements dans le code qui les utilisent.
Pour permettre à une fonction ou méthode d'accepter et opérer sur un paramètre qui 
conforme à une interface, sans se soucier de quoi d'autre l'objet peut faire ou comment 
c'est implémenté. Ces interfaces sont souvent nommées Iterable, Cacheable, Renderable, 
etc. pour décrire la signification de leur comportement.
Les interfaces peuvent définir des méthodes magiques pour obliger les classes implémentant 
à implémenter ces méthodes.

### Note:

Tant bien que c'est supporté, inclure les constructeurs dans les interfaces et fortement 
déconseillé. Faire ceci réduit radicalement la flexibilité des objets implémentant 
l'interface. De plus, les constructeurs ne sont pas soumis aux règles d'héritage, ce qui 
peut causer des incohérences et des comportements inattendus.

## implements

Pour implémenter une interface, l'opérateur implements est utilisé. Toutes les méthodes 
de l'interface doivent être implémentées dans une classe ; si ce n'est pas le cas, une 
erreur fatale sera émise. Les classes peuvent implémenter plus d'une interface, en 
séparant chaque interface par une virgule.

## Avertissement

Une classe qui implémente une interface peut utiliser des noms différents pour ses 
paramètres que l'interface. Cependant, à partir de PHP 8.0, le langage supporte les 
arguments nommés, ce qui signifie que l'appeleur peut dépendre du nom du paramètre dans 
l'interface. Pour cette raison, il est fortement recommandé que les développeurs utilisent 
le même nom de paramètre que dans l'interface qui est implémenté.

### Note:

Les interfaces peuvent être étendues comme des classes, en utilisant l'opérateur extends

### Note:

La classe implémentant l'interface doit déclarer toutes les méthodes dans l'interface 
avec une signature compatible. Une classe peut implémenter deux interfaces qui 
définissent une méthode avec le même nom. Dans ce cas, l'implémentation doit suivre les 
règles de compatibilité des signatures pour toutes les interfaces. Ainsi, la covariance 
et la contravariance peuvent être appliquées.

```
<?php
interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "Meow";
  }
}

$animal = new Cat();
$animal->makeSound();
?>
```

--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---

# Traits (use)

PHP implémente une manière pour réutiliser du code appelée Traits.

Les traits sont un mécanisme de réutilisation de code dans un langage à héritage 
simple tel que PHP. Un trait tente de réduire certaines limites de l'héritage simple, 
en autorisant le développeur à réutiliser un certain nombre de méthodes dans des 
classes indépendantes. La sémantique entre les classes et les traits réduit la 
complexité et évite les problèmes typiques de l'héritage multiple et des Mixins.

Un trait est semblable à une classe, mais il ne sert qu'à grouper des fonctionnalités 
d'une manière intéressante. Il n'est pas possible d'instancier un Trait en lui-même. 
C'est un ajout à l'héritage traditionnel, qui autorise la composition horizontale de 
comportements, c'est à dire l'utilisation de méthodes de classe sans besoin d'héritage.

```
<?php
trait message1 {
public function msg1() {
    echo "OOP is fun! ";
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>
```

--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---

```
$_POST, $_GET, $_FILE, $_COOKIE, $_SESSION, $_SERVER

if (isset($_POST['email']))
{...}
```

---

# Performance

concaténation d'un echo = meilleur performance. => "Un truc" . $value . "fin.\n"
que echo "La {$value} qui est retournée."

---

("")
L'utilisation des guillemets doubles permet une interprétation des variables 
pendant la lecture. Ceci ralentit sensiblement le processus mais permet 
d'éviter la concaténation.

---

```
(_)
(dans une class)
private static $_property;

(class ou function)
private function _mailSend()
```

---

(::) public static $var or function ...()

Deux fois deux points (::) sont utilisés pour les
attributs et méthodes publiques et statiques.

Comme indiqué précédemment aucune instanciation n'est nécessaire 
pour appeler un attribut ou une méthode à l'extérieur de la classe. 
Il suffit d'appeler la classe accompagnée de la méthode séparés par 
deux fois deux points (::).

--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---
```
class Db
{
	// Attribut statique de la classe
	public static $port = 3360;

	// Méthode statique de la classe
	public static function db() {
		return new mysqli( 'localhost', 'root', '', 'atelierphp', self::$port );
	}
}

$db = Db::db();
$results = $db->query( 'SELECT * FROM articles' );
```

--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---

# SITE_PATH

```
define('SITE_PATH',
realpath(dirname(__FILE__)));
include SITE_PATH . '/includes/Db.php';
```

--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---

```
class Db
{
	// Attribut statique de la classe
	public static $port = 3360;

	// Méthode statique de la classe
	public static function db() {
		return new mysqli( 'localhost', 'root', '', 'atelierphp', self::$port );
	}
}
```

--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---

# define (); => valeur fixe comme address URL du site.

Une constante permet de définir de manière définitive une valeur. L'utilisation 
d'une constante est similaire à celle d'une variable. Il est convenu d'utiliser 
les constantes pour des valeurs fixes. Comme l'adresse URL du site.

La création d'une constante se fait par l'appel de la fonction PHP define().

--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---

```
class MyFileClass
{
	public $fileWeight;

	public function getFileWeight()
	{
		return $this->fileWeight;
		// Accède à un attribut de la classe
	}

	public function otherMethod()
	{
		$this->getFileWeight();
		// Accède à une méthode de la classe
	}
}
```

--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---

# L'état statique (public static) pas d'instance.

L'état statique permet de disposer des attributs et méthodes d'une classe 
sans créer d'instance. Ce type d'appel est moins fréquent mais s'avère utile 
dans le cas où il s'agit de consulter une information qui ne change pas. Un 
exemple concret est la connexion à la base de données. Une fois la connexion 
établie elle ne change pas. Nous avons toutefois besoin de l'état de la 
connexion à chaque fois qu'une nouvelle requête doit être initiée.

```
class Db
{
	// Attribut statique de la classe
	public static $port = 3360;

	// Méthode statique de la classe
	public static function db() {
		return new mysqli( 'localhost', 'root', '', 'atelierphp', self::$port );
	}
}
```

Comme indiqué précédemment aucune instanciation n'est nécessaire pour appeler 
un attribut ou une méthode à l'extérieur de la classe. Il suffit d'appeler la 
classe accompagnée de la méthode séparés par deux fois deux points (::).

```
$db = Db::db();

$results = $db->query( 'SELECT * FROM articles' );
```

A l'intérieur d'une classe, le mot-clé self:: permet d'accéder aux attributs et méthodes de la classe.

```
class Db
{

	// Attribut statique de la classe
	public static $port = 3360;

	// Méthode statique de la classe
	public static function db() {
		return new mysqli( 'localhost', 'root', '', 'atelierphp', self::$port );
	}
}
```

---

La déclaration d'une méthode constructeur se fait par la déclaration dans la classe de la méthode `__construct()`.

```
class MyClass
{
	function `__construct()` {
		// Opérations prévues à l'appel de la classe MyClass
	}
}
```

Il peut notamment s'avérer utile de transmettre certaines valeurs lors de la création d'un objet. Ceci facilite la
transmission de paramètres essentiels pour la suite. Les paramètres ont la forme d'une variable et intègrent la
classe via le constructeur.

```
class MyOtherClass
{
	function MyOtherClass( $param ){
		// Opérations prévues à l'appel de la classe MyClass
	}
}
```

$myObj = new MyOtherClass( 'value' );

---

Les portées « public », « protected » et « private ». (p.20)

---

Aller plus loin...

Les constantes, les méthodes magiques, l'abstraction des classes, l'autochargement de classes, les interfaces,
pour ne nommer qu'eux, sont des outils utiles à la programmation orientée objet en PHP qui permettent d'aller
plus loin dans l'utilisation des possibilités du code.

---

MySQLi

config.ini

1 [database]
2 dbhost = localhost
3 dbuser = root
4 dbpass =
5 dbname = atelierphp
6 dbport = 3306

