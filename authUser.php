<?php
  include "configbdd.php";
  //script de verification de l'autentification de l'utilisateur;

  $email = $_REQUEST["email"];
  $password_1 = $_REQUEST['password'];

  $req = $bdd->prepare('SELECT id, password_1 FROM users WHERE email = :email');
  $req->execute(['email' => $email]);
  $resultat = $req->fetch(); //on recupère l'id et le mdp lier au mail (peut être vide si mail faux)

  $isPasswordCorrect = password_verify($password_1, $resultat['password_1']); //on vérifie si le mdp rentrer est en accord avec celui en bdd


  if (!$resultat){ //si le résultat est vide (donc email faux)
    echo 'Mauvais email ou mot de passe !';
  }
  else{
    if ($isPasswordCorrect) { //si le mdp est bon
        session_start();
        $_SESSION['id'] = $resultat['id']; //ouverture d'une super variable session si le password_1 est correct;
        header("Location: index.php");
    }
    else {
       echo 'Mauvais email ou mot de passe !';
    }
  }
?>