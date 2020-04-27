<?php
include 'configbdd.php' ;

$firstname = $_REQUEST["firstname"] ;
$lastname = $_REQUEST["lastname"] ;
$email = $_REQUEST["email"] ;
$adresse = $_REQUEST["adresse"] ;
$telephone = $_REQUEST["telephone"];
$password_1 = $_REQUEST["valid_mdp1"] ;


$query = $bdd->prepare("INSERT INTO users SET firstname=:firstname, lastname=:lastname, email=:email, adresse=:adresse, telephone=:telephone, password_1=:password_1 ");
$query->execute(['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email, 'adresse'=>$adresse,'telephone'=>$telephone, 'password_1'=>$password_1 ]) ;
//header('Location: http://localhost/projetMarchand/index.php');
//exit();
