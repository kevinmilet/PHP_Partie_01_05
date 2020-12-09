<?php

function func($number1 = 35, $number2 = 35)
{
    if ($number1 > $number2) {
        echo 'Le premier nombre est plus grand que le deuxième';
    } elseif ($number1 < $number2) {
        echo 'Le premier nombre est plus petit que le deuxième';
    } elseif ($number1 == $number2) {
        echo 'Les deux nombres sont identiques';
    }
};

func();