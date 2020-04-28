<?php

session_start();

$id = $_REQUEST['idToDel'];
unset($_SESSION['panier'][$id]);

if (empty($_SESSION['panier'])){
  unset($_SESSION['panier']);
}

header("Location:panier.php")

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>