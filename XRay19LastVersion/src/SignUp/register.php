<?php
// Include config file
//require("C:\Users\barto\Desktop\UwAmp\www\XRay-19\src\connectBDD.php");
$conn = mysqli_connect('localhost', 'root', 'root', 'x_ray19_bd') or die(mysqli_error());
$NAME = $_POST['name'];
$FIRSTNAME = $_POST['surname'];
$EMAIL = $_POST['email'];
$PASSWORD = $_POST['password'];
$PHONE = $_POST['phoneNumber'];
$LIEU = $_POST['lieuProfession'];

$req="INSERT INTO medecin (nom, prenom, adresse_mail, mot_de_passe, num_tel, lieu_de_profession) VALUES ('$NAME','$FIRSTNAME','$EMAIL','$PASSWORD', '$PHONE', '$LIEU')";

$res=mysqli_query($conn,$req);

header('Location: ../SignIn/signIn.php');
?>