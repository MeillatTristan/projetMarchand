<?php

session_start();

$idArticle = $_REQUEST['id'];
$quantity = $_REQUEST['quantity'];

if(!isset($_SESSION['panier'])){
  $_SESSION['panier'] = [];
}

if(isset($_SESSION['panier'][$idArticle])){
  $_SESSION['panier'][$idArticle] += $quantity;
}
else{
  $_SESSION['panier'][$idArticle] = $quantity;
}

if ($_REQUEST['page'] == 'l'){
  header("Location:legume.php");
}
elseif ($_REQUEST['page'] == 'f'){
  header("Location:fruit.php");
}
?>