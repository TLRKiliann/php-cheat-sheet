# Surcharge de propriété ou de méthode

## CMD to run

`php index.html`

ou

`php -S localhost:8000`

## Explanations

En PHP, on dit qu’on « surcharge » une propriété ou une méthode d’une classe mère lorsqu’on la redéfini dans une classe fille.

Pour surcharger une propriété ou une méthode, il va falloir la redéclarer en utilisant le même nom. Par ailleurs, si on souhaite surcharger une méthode, il faudra également que la nouvelle définition possède le même nombre de paramètres.

Notez que lorsqu’on surcharge une propriété ou une méthode, la nouvelle définition doit obligatoirement posséder un niveau de restriction de visibilité plus faible ou égal, mais ne doit en aucun cas avoir une visibilité plus restreinte que la définition de base.

Par exemple, si on surcharge une propriété définie comme protected, la nouvelle définition de la propriété ne pourra être définie qu’avec public ou protected mais pas avec private qui correspond à un niveau de visibilité plus restreint.

Notez qu’il va être relativement rare d’avoir à surcharger des propriétés. Généralement, nous surchargerons plutôt les méthodes d’une classe mère depuis une classe fille.

## Accéder à une méthode ou une propriété surchargée grâce à l’opérateur de résolution de portée

Nous allons pouvoir utiliser trois mots clefs pour accéder à différents éléments d’une classe avec l’opérateur de résolution de portée : 

- parent 
- self 
- static

L’opérateur de résolution de portée qui est symbolisé par le signe `::`

self::method or prop

parent::method or prop