<?php

$number = 1;

while ($number <= 10) {
    echo $number;
    echo '<br>';
    $number += $number / 2;
}