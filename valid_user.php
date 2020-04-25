<?php
include 'configbdd.php' ;
$firstname = $_REQUEST["firstname"] ;
$lastname = $_REQUEST["lastname"] ;
$email = $_REQUEST["email"] ;
$adresse = $_REQUEST["adresse"] ;
$password_1 = $_REQUEST["password_1"] ;
$password_2 = $_REQUEST["password_2"] ;

$query = $bdd->prepare("UPDATE user SET firstname=:firstname, lastname=:lastname, email=:email, adresse=:adresse, password_1=:password_1, password_2=:password_2 WHERE id=:id");
$query->execute(['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email, 'adresse'=>$adresse, 'password_1'=>$password_1, 'password_2'=>$password_2, 'id'=>$id]) ;
//header('Location: http://localhost/projetMarchand/index.php');
//exit();
