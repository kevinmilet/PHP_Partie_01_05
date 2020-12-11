<!-- Créer une variable isEasy de type booléan et l'initialiser avec une valeur.  
Afficher C'est facile !! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!. 

Bonus : L'écrire de deux manières différentes. -->

<?php
$isEasy = false;

if ($isEasy == true) {
    echo 'C\'est facile !!';
} else {
    echo 'C\'est difficile !!';
    echo '<br>';
}?>

<?php 
    if ($isEasy == true): 
        echo 'C\'est facile !!';
    else: 
        echo 'C\'est difficile !!';
    endif;
?>

<?php
    echo ($isEasy == false) ? 'C\'est difficile !!' : 'C\'est facile !!';
?>