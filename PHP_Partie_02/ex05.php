<!-- Traduire ce code avec des if et des else : 

  echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!'; -->

<?php

$gender = 'Femme';

if ($gender != 'Homme') {
    echo 'C\'est une développeuse !!!';
} else {
    echo 'C\'est un développeur !!!';
}