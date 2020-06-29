<?php
include "configbdd.php";
$_REQUEST['idCommande'];

if(isset($_REQUEST['validate'])){
  $requete= $bdd->query("UPDATE commandes SET validate='y'");
}

if(isset($_REQUEST['livrer'])){
  $requete= $bdd->query("UPDATE commandes SET livrer='y'");
}
header("Location:commandesAdmin.php")
?>