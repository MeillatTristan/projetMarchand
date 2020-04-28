<?php
include 'configbdd.php' ;

$firstname = $_REQUEST["firstname"] ;
$lastname = $_REQUEST["lastname"] ;
$email = $_REQUEST["email"] ;
$adresse = $_REQUEST["adresse"] ;
$code_postal = $_REQUEST["code_postal"] ;
$ville = $_REQUEST["ville"] ;
$telephone = "+33".$_REQUEST["telephone"];
$password_1 = password_hash($_REQUEST['valid_mdp1'], PASSWORD_DEFAULT);


$query = $bdd->prepare("INSERT INTO users SET firstname=:firstname, lastname=:lastname, email=:email, adresse=:adresse, code_postal=:code_postal, ville=:ville, telephone=:telephone, password_1=:password_1 ");
$query->execute(['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email, 'adresse'=>$adresse, 'code_postal'=>$code_postal, 'ville'=>$ville, 'telephone'=>$telephone, 'password_1'=>$password_1 ]) ;
header('Location: http://localhost/projetMarchand/index.php');
exit();
