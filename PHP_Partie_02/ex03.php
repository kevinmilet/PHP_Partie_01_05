<!-- Créer deux variables age et gender. La variable gender peut prendre comme valeur :
Homme
Femme

En fonction de l'âge et du genre afficher la phrase correspondante :
Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeure
Vous êtes une femme et vous êtes mineur 

Gérer tous les cas.  -->

<?php

$age = 25;
$gender = 'femme';

if ($age >= 18 && $gender == 'homme') {
    echo 'Vous êtes un homme et vous êtes majeur';
} elseif ($age >= 18 && $gender == 'femme') {
    echo 'Vous êtes une femme et vous êtes majeure';
} elseif ($age < 18 && $gender == 'homme') {
    echo 'Vous êtes un homme et vous êtes mineur';
} elseif ($age < 18 && $gender == 'femme') {
    echo 'Vous êtes une femme et vous êtes mineure';
} else {
    echo 'Entrez des données valides';
}