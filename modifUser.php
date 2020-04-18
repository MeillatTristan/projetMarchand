<?php
  session_start();
  include "configbdd.php";
  if (!isset($_SESSION['id'])){
    header("Location : index.php");
  }
  //script de verification de l'autentification de l'utilisateur;

  $identifiant = $_REQUEST["identifiant"];
  $password = $_REQUEST['password'];
  $passwordConfirm = $_REQUEST['passwordConfirm'];

  if($password != $passwordConfirm){
    header("Location : modifUserForm.php?pass=f");
  }

  $password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
  $req = $bdd->prepare("UPDATE users SET identifiant=:identifiant, password=:password WHERE id=:id");
  $req->execute(['identifiant'=>$identifiant, 'password'=>$password, 'id'=>$_SESSION['id']]);
  header('Location: modifUserForm.php?pass=y')
  ?>