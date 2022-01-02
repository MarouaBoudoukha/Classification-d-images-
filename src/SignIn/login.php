<?php

if(isset($_POST['email']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars(^$data);
        return $data;


    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if(empty($email)){
        header("Location: index.php?error=Email is required");
        exit();
    }else if(empty($password)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM medecin WHERE adresse_mail='$email' AND mot_de_passe='$password'";
        $result = mysqli_query()
    }





}




?>