<?php

session_start();

$id = $_REQUEST['idToDel'];
unset($_SESSION['panier'][$id]);

if (empty($_SESSION['panier'])){
  unset($_SESSION['panier']);
}

header("Location:panier.php")

?>