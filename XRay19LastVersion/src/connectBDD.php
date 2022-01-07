<?php
   /* $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    
    //On établit la connexion
    $conn = new mysqli($servername, $username, $password);
    
    //On vérifie la connexion
    if($conn->connect_error){
        die('Erreur : ' .$conn->connect_error);
    }
    echo 'Connexion réussie';*/
    $BDD = array();
    $BDD['host'] = "localhost";
    $BDD['user'] = "root";
    $BDD['pass'] = "root";
    $BDD['db'] = "x_ray19_bd";
    $mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
    if(!$mysqli) {
        echo "Connexion non établie.";
        exit;
    }

?>
