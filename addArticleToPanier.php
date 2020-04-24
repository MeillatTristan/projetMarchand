<?php

session_start();

$idArticle = $_REQUEST['id'];
$quantity = $_REQUEST['quantity'];
if (!is_int($quantity) OR $quantity <= 0){
  if ($_REQUEST['page'] == 'l'){
    header("Location:legume.php?falseQuantity=y");
  }
  elseif ($_REQUEST['page'] == 'f'){
    header("Location:fruit.php?falseQuantity=y");
  }
}

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