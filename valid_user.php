<?php
include 'configbdd.php' ;

$firstname = $_REQUEST["firstname"] ;
$lastname = $_REQUEST["lastname"] ;
$email = $_REQUEST["email"] ;
$adresse = $_REQUEST["adresse"] ;
$code_postal = $_REQUEST["code_postal"] ;
$ville = $_REQUEST["ville"] ;
if (isset($_REQUEST['telephone_f'])) {
  $telephone_f = $_REQUEST['telephone_f'] ;
}
else {
  $telephone_f = '' ;
}

$telephone_p = "+33".$_REQUEST["telephone_p"];
$password_1 = password_hash($_REQUEST['valid_mdp1'], PASSWORD_DEFAULT);


$query = $bdd->prepare("INSERT INTO users SET firstname=:firstname, lastname=:lastname, email=:email, adresse=:adresse, code_postal=:code_postal, ville=:ville, telephone=:telephone, password_1=:password_1 ");
$query->execute(['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email, 'adresse'=>$adresse, 'code_postal'=>$code_postal, 'ville'=>$ville, 'telephone'=>$telephone, 'password_1'=>$password_1 ]) ;
//header('Location: http://localhost/projetMarchand/index.php');
exit();
