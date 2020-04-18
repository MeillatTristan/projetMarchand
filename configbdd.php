<?php
   //script include dès qu'une requete est necessaire
   try
   {
      //ouverture base de donnée
      $bdd = new PDO('mysql:host=localhost;dbname=projetmarchand;charset=utf8', 'root', '');
      //fonction pour affichage des erreurs mySql;
      $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
   }
   catch (Exception $e)
   {
      header('Location: errorbdd.php');
   }

 ?>