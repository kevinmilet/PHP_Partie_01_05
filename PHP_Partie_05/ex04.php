<!-- Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant. -->
<?php

$months = [
    'janvier',
    'février',
    'mars',
    'avril',
    'mai',
    'juin',
    'juillet',
    'aout',
    'septembre',
    'octobre',
    'novembre',
    'décembre'
];

echo $months[7];
echo '<br>';

// array_splice($months, 7, 1, 'août');
$months[7] = 'août';

echo $months[7];