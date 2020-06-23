<?php
include 'configbdd.php' ;

$firstname = $_REQUEST["firstname"] ;
$lastname = $_REQUEST["lastname"] ;
$email = $_REQUEST["email"] ;
if (isset($_REQUEST["adresse"])) {
  $adresse = $_REQUEST['adresse'] ;
}
else {
  $adresse = '' ;
}
if (isset($_REQUEST["code_postal"])) {
  $code_postal = $_REQUEST['code_postal'] ;
}
else {
  $codepostal = '' ;
}
if (isset($_REQUEST["ville"])) {
  $ville = $_REQUEST['ville'] ;
}
else {
  $ville = '' ;
}
if (isset($_REQUEST['telephone_f'])) {
  $telephone_f = $_REQUEST['telephone_f'] ;
}
else {
  $telephone_f = '' ;
}

$telephone_p = $_REQUEST["telephone_p"];
$password_1 = password_hash($_REQUEST['valid_mdp1'], PASSWORD_DEFAULT);


$query = $bdd->prepare("INSERT INTO users SET firstname=:firstname, lastname=:lastname, email=:email, adresse=:adresse, code_postal=:code_postal, ville=:ville, telephone_p=:telephone_p, telephone_f=:telephone_f, password_1=:password_1 ");
$query->execute(['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email, 'adresse'=>$adresse, 'code_postal'=>$code_postal, 'ville'=>$ville, 'telephone_p'=>$telephone_p,'telephone_f'=>$telephone_f, 'password_1'=>$password_1 ]) ;
header('Location: index.php');
exit();
