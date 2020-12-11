<!-- Traduire ce code avec des if et des else :  

  echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!'; -->


<?php

$isOk = true;

if ($isOk == false) {
    echo 'c\'est pas bon !!!';
} else {
    echo 'c\'est ok !!';
}