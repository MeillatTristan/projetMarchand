<?php
   //script include dès qu'une requete est necessaire
   try
   {
      //ouverture base de donnée
      $bdd = new PDO('mysql:host=mysql-elfe.alwaysdata.net;dbname=elfe_salahprimeur;charset=utf8', 'elfe', 'Superdunk13');
      //fonction pour affichage des erreurs mySql;
      $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
   }
   catch (Exception $e)
   {
      header('Location: errorbdd.php');
   }

 ?>