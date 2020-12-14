<!-- Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
Les deux nombres sont identiques si les deux nombres sont égaux -->

<?php

    function func($number1, $number2) {
        $response = '';
        if ($number1 > $number2) {
            $response = 'Le premier nombre est plus grand que le deuxième';
        } elseif ($number1 < $number2) {
            $response = 'Le premier nombre est plus petit que le deuxième';
        } else {
            $response = 'Les deux nombres sont identiques';
        }
        return $response;
    };

    echo func(48, 489);
    echo '<br>';
    echo func(125, 65);
    echo '<br>';
    echo func(12, 12);
    echo '<br>';
    