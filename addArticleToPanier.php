<?php

session_start();

$idArticle = $_REQUEST['id'];

if(!isset($_SESSION['panier'])){
  $_SESSION['panier'] = [];
}

for($i = 0; $i < count($_SESSION['panier']); $i++){
  if($_SESSION['panier'][$i][0] == $idArticle){
    echo $idArticle;
    $index = $i;
  }
}

if(isset($present)){
  $_SESSION['panier'][$index][1] += 1;

}
else{
  $_SESSION['panier'][] = [$idArticle, 1];
}

if ($_REQUEST['page'] == 'l'){
  header("Location:legume.php");
}
elseif ($_REQUEST['page'] == 'f'){
  header("Location:fruit.php");
}
?>