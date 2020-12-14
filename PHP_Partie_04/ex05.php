<!-- Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres. -->

<?php

    function func($number, $str) {
        return $str . ' ' . $number;
    };

    echo func(12, 'Je concatène ma chaine de caractéres avec le nombre');
