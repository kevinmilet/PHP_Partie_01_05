<!-- Créer une variable et l'initialiser à 1.  
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer de la moitié de sa valeur -->

<?php

$number = 1;

while ($number <= 10) {
    echo $number.'<br>';
    $number += $number / 2;
}