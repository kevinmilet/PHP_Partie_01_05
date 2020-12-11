<!-- En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!. -->

<?php

$number = 0;

for ($number = 200; $number >= 0; $number = $number - 12) {
    echo $number.' Enfin !!!!'.'<br>';
}