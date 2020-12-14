<!-- Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :  
Bonjour + nom + prénom + , tu as + age + ans. -->

<?php

    function func($lastname, $firstname, $age) {
        return 'Bonjour ' . $firstname . ' ' . $lastname . ', tu as ' . $age . ' ans !';
    }

    echo func('Bonisseur de la Bath', 'Hubert', 35);
