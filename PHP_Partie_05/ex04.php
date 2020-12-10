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

array_splice($months, 7, 1, 'août');

echo $months[7];