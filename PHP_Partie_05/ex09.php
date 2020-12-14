<!-- Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau. -->

<?php

$departements = [
    '02' => 'Aisne',
    '59' => 'Nord',
    '60' => 'Oise',
    '62' => 'Pas-de-Calais',
    '80' => 'Somme'
];

foreach ($departements as $value) {
    echo $value;
    echo '<br>';
};