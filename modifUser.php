<?php
include 'configbdd.php' ;
session_start();

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
$password_1 = $_REQUEST['passwordConfirm'];
$id = $_SESSION['id'];
$user = $bdd->query("SELECT * FROM users WHERE id = $id")->fetch();
echo password_verify($password_1, $user['password_1']);
if(!password_verify($password_1, $user['password_1'])){
  header("Location:modifUserForm.php?errorPass=y");
}
else{
  $query = $bdd->prepare("UPDATE users SET firstname=:firstname, lastname=:lastname, email=:email, adresse=:adresse, code_postal=:code_postal, ville=:ville, telephone_p=:telephone_p, telephone_f=:telephone_f, password_1=:password_1 WHERE id=:id");
  $query->execute(['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email, 'adresse'=>$adresse, 'code_postal'=>$code_postal, 'ville'=>$ville, 'telephone_p'=>$telephone_p,'telephone_f'=>$telephone_f, 'password_1'=>$password_1, 'id'=>$_SESSION['id']]) ;header('Location:modifUserform.php');

 header("Location:modifUserForm.php");
  exit();
}


