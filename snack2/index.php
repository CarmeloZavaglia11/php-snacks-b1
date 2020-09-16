<!-- Snack 2
Passare come parametri GET name, mail ed age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

    $name = $_GET['name'];
    $email = $_GET['email'];
    $eta = $_GET['eta'];

    if (!empty($name) && !empty($email) && !empty($eta)) {
        if ((strlen($name) > 3) && (strpos($email,'@') !== false) && (strpos($email,'.') !== false) && (is_nan($eta) == false)) {
            echo 'Accesso Riuscito';
        }  else {
            echo 'Accesso Negato';
        }
    }  else {
        echo 'Accesso Negato';
    }


?>