Les classes et méthodes abstraites : définition et intérêt
Une classe abstraite est une classe qui ne va pas pouvoir être instanciée directement, c’est-à-dire qu’on ne va pas pouvoir manipuler directement.

Une méthode abstraite est une méthode dont seule la signature (c’est-à-dire le nom et les paramètres) va pouvoir être déclarée mais pour laquelle on ne va pas pouvoir déclarer d’implémentation (c’est-à-dire le code dans la fonction ou ce que fait la fonction).

Dès qu’une classe possède une méthode abstraite, il va falloir la déclarer comme classes abstraite.

Pour comprendre les intérêts des classes et des méthodes abstraites, il faut bien penser que lorsqu’on code en PHP, on code généralement pour quelqu’un ou alors on fait partie d’une équipe. D’autres développeurs vont ainsi généralement pouvoir / devoir travailler à partir de notre code, le modifier, ajouter des fonctionnalités, etc.

L’intérêt principal de définir une classe comme abstraite va être justement de fournir un cadre plus strict lorsqu’ils vont utiliser notre code en les forçant à définir certaines méthodes et etc.

En effet, une classe abstraite ne peut pas être instanciée directement et contient généralement des méthodes abstraites. L’idée ici va donc être de définir des classes mères abstraites et de pousser les développeurs à étendre ces classes.

Lors de l’héritage d’une classe abstraite, les méthodes déclarées comme abstraites dans la classe parent doivent obligatoirement être définies dans la classe enfant avec des signatures (nom et paramètres) correspondantes.

Cette façon de faire va être très utile pour fournir un rail, c’est-à-dire une ligne directrice dans le cas de développements futurs.

En effet, en créant un plan « protégé » (puisqu’une classe abstraite ne peut pas être instanciée directement) on force les développeurs à étendre cette classe et on les force également à définir les méthodes abstraites.

Cela nous permet de nous assurer que certains éléments figurent bien dans la classe étendue et permet d’éviter certains problèmes de compatibilité en nous assurant que les classes étendues possèdent une structure de base commune.