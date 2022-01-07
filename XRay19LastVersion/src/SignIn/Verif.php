<?php
session_start();
if(isset($_POST['email']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = 'root';
    $db_name     = 'x_ray19_bd';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $email = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($email !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM medecin where 
               adresse_mail = '".$email."' and mot_de_passe = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['email'] = $email;
           header('Location: Profil.php');
        }
        else
        {
           header('Location: signIn.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: signIn.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: signIn.php');
}
mysqli_close($db); // fermer la connexion
?>