<?php

session_start();
include "configbdd.php";

if(!isset($_SESSION['id'])){
  header("Location:errorAuth.php");
}
if(!$_SERVER["REQUEST_METHOD"] == "POST"){
  header('Location: addArticleForm.php?good=f');
}

if(!isset($_REQUEST['name'])){
  header("Location: addArticleForm.php");
}



$name = $_REQUEST['name'];
$type = $_REQUEST['type'];
$price = $_REQUEST['price'];
$provenance = $_REQUEST['provenance'];
$namePicture = $_FILES['picture']['name'];
$description = $_REQUEST['description'];
$bio = $_REQUEST['bio'];
$tag = [$type,$bio];
echo "bio";

move_uploaded_file($_FILES['picture']['tmp_name'], "images/" . $namePicture);
$queryInsert = $bdd->prepare("INSERT INTO articles SET name = :name, prix = :price, picture = :picture, venteBool= :venteBool, provenance= :provenance, description = :description");
$queryInsert->execute(array(':name' =>$name, ':price'=>$price, ':picture' => $namePicture, ':venteBool' =>'y', ':provenance'=>$provenance, ':description'=>$description));


$idLastArticle = $bdd->query("SELECT * FROM articles GROUP BY id DESC")->fetch()[0];

foreach($tag as $element){
  $queryAddTag = $bdd->prepare("INSERT INTO tagarticles SET idArticle = :idArticle, tag=:tag");
  $queryAddTag->execute(array(':idArticle' =>$idLastArticle, ':tag'=>$element));
}


header('Location: addArticleForm.php?good=y');


?>