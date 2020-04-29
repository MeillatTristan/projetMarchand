<?php
include 'configbdd.php' ;
$id = $_REQUEST['idarticle'] ;
$article = $bdd->query("SELECT * FROM articles WHERE id = $id")->fetch() ;
$name = $_REQUEST["name"] ;
$type = $_REQUEST["type"] ;
$quantity = $_REQUEST["quantity"] ;
$prix = $_REQUEST["prix"] ;
$provenance = $_REQUEST["provenance"] ;
$vente = $_REQUEST["VenteBool"] ;
if (isset($_FILES['picture'])) {
  $picture = $_FILES['picture'] ;
} 
else {
  $picture = $article['picture'] ;
}
$query = $bdd->prepare("UPDATE articles SET name=:name, type=:type, quantity=:quantity, prix=:prix, provenance=:provenance, venteBool=:venteBool, picture=:picture WHERE id=:id");
$query->execute(['name'=>$name, 'type'=>$type, 'quantity'=>$quantity, 'prix'=>$prix, 'provenance'=>$provenance, 'venteBool'=>$vente, 'picture'=>$picture, 'id'=>$id]) ;

header('Location: modifArticleList.php');
exit();
?>