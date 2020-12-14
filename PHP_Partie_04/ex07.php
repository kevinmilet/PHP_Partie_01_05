<!-- Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :
Homme
Femme  

La fonction doit renvoyer en fonction des paramètres :

Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeure
Vous êtes une femme et vous êtes mineure

Gérer tous les cas. -->

<?php

    // function func($age, $gender) {
    //     $response = '';
    //     if ($age >= 18 && $gender == 'homme') {
    //         $response = 'Vous êtes un homme et vous êtes majeur';
    //     } elseif ($age >= 18 && $gender == 'femme') {
    //         $response = 'Vous êtes une femme et vous êtes majeure';
    //     } elseif ($age < 18 && $gender == 'homme') {
    //         $response = 'Vous êtes un homme et vous êtes mineur';
    //     } elseif ($age < 18 && $gender == 'femme') {
    //         $response = 'Vous êtes une femme et vous êtes mineure';
    //     }
    //     return $response;
    // };

    function func($age, $gender) {
        $response = '';
        if ($age >= 18 && ($gender == 'homme' || $gender == 'femme')) {
            $response = 'Vous êtes un(e) ' . $gender . ' et vous êtes majeur(e)';
        } elseif ($age < 18 && ($gender == 'homme' || $gender == 'femme')) {
            $response = 'Vous êtes un(e) ' . $gender . ' et vous êtes mineur(e)';
        };
        return $response;
    };

    echo func(25, 'femme');