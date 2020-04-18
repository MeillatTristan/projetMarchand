<?php
  include "configbdd.php";
  //script de verification de l'autentification de l'utilisateur;

  $identifiant = $_REQUEST["identifiant"];
  $password = $_REQUEST['password'];

  $req = $bdd->prepare('SELECT id, password FROM users WHERE identifiant = :identifiant');
  $req->execute(['identifiant' => $identifiant]);
  $resultat = $req->fetch(); //on recupère l'id et le mdp lier au mail (peut être vide si mail faux)
  echo "yo";

  $isPasswordCorrect = password_verify($password, $resultat['password']); //on vérifie si le mdp rentrer est en accord avec celui en bdd


  if (!$resultat){ //si le résultat est vide (donc identifiant faux)
    echo 'Mauvais identifiant ou mot de passe !';
  }
  else{
    if ($isPasswordCorrect) { //si le mdp est bon
        session_start();
        $_SESSION['id'] = $resultat['id']; //ouverture d'une super variable session si le password est correct;
        header("Location: index.php");
    }
    else {
       echo 'Mauvais identifiant ou mot de passe !';
    }
  }
?>