<!-- Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  
Tous les paramètres doivent avoir une valeur par défaut. -->

<?php

    function sum($number1 = 0, $number2 = 0, $number3 = 0)
    {
        return $number1 + $number2 + $number3;
    };

    echo sum(12, 25, 36);
