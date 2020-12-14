<!-- Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines. -->

<?php

    function str($str1, $str2)
    {
        return $str1 . ' ' . $str2;
    };

    echo str('Comment est votre blanquette?', 'Elle est bonne!');