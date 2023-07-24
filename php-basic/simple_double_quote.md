# Guillemets simples et les guillemets doubles

La différence la plus significative entre les guillemets simples et les guillemets doubles réside lorsque nous interpolons la chaîne et la variable. Le guillemet simple n’interpole pas la chaîne et les variables. Le contenu à l’intérieur du guillemet simple s’imprime aussi exactement qu’il est. Dans la plupart des cas, il n’y a pas de compilation de variables ou de séquences d’échappement à l’intérieur du guillemet simple.

Mais, dans le cas des guillemets doubles, la variable écrite à l’intérieur des guillemets sera interpolée avec la chaîne. Cela signifie que la variable dans la chaîne sera évaluée. Par conséquent, il est facile d’utiliser des guillemets doubles lors de l’interpolation de la chaîne et des variables. L’avantage des guillemets doubles par rapport aux guillemets simples est que nous n’avons pas besoin de concaténer la chaîne et les variables à l’aide du . opérateur. Cependant, comme les variables doivent être évaluées dans la chaîne, l’utilisation de guillemets doubles sera légèrement plus lente que l’utilisation de guillemets simples.

---

`echo "Simple sentence to display.\n";`

with `\'`

`echo 'Here\'s my sentence';`
