<?php

function func($age, $gender)
{
    if ($age >= 18 && $gender == 'homme') {
        echo "Vous êtes un homme et vous êtes majeur";
    } elseif ($age >= 18 && $gender == 'femme') {
        echo "Vous êtes une femme et vous êtes majeure";
    } elseif ($age < 18 && $gender == 'homme') {
        echo "Vous êtes un homme et vous êtes mineur";
    } elseif ($age < 18 && $gender == 'femme') {
        echo "Vous êtes une femme et vous êtes mineure";
    }
};

func(12, 'homme');