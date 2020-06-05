<?php

session_start();
setlocale(LC_TIME, "fr_FR");
include "configbdd.php";

$typeLivraison = $_REQUEST['livraison'];
$dateLivraison = $_REQUEST['dateLivraison'];
$currentDate = strftime(" %A %d %B %Y");
$idUser = $_SESSION['id'];
echo $currentDate;

$query = $bdd->prepare("INSERT INTO commandes SET userID=:userID, dateCommande=:dateCommande, dateRetrait=:dateRetrait, retrait=:typeRetrait");
//$query->execute(['userID'=>$idUser, 'dateCommande'=>$currentDate, 'dateRetrait'=>$dateLivraison, 'typeRetrait'=>$typeLivraison]) ;
$idCommande = $bdd->query("SELECT id FROM commandes ORDER BY id DESC")->fetch()[0];


$panier = $_SESSION['panier'];
foreach ($panier as $element){
  $query = $bdd->prepare("INSERT INTO liaisoncommande SET commandeID=:commandeID, articleID=:articleID, quantity=:quantity");
  $query->execute(['commandeID'=>$idCommande, 'articleID'=>$element[0], 'quantity'=>$element[1]]) ;
}
unset($_SESSION['panier']);
header('Location:panier.php?commande=valid')
?>