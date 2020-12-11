<!-- En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout. -->

<?php

$number = 0;

for ($number = 1; $number <= 100; $number+=15) {
    echo $number.' On tient le bon bout'.'<br>';
}