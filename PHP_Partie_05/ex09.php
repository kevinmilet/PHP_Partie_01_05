<?php

$departements = [
    '02' => 'Aisne',
    '59' => 'Nord',
    '60' => 'Oise',
    '62' => 'Pas-de-Calais',
    '80' => 'Somme'
];

foreach ($departements as $key => $value) {
    echo "{$key} => {$value} ";
    echo '<br>';
};