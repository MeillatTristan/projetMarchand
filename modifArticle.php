<?php

include "configbdd.php";

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$type = $_REQUEST['type'];
$price = $_REQUEST['price'];
$provenance = $_REQUEST['provenance'];
if(isset($_FILES['picture']['name'])){
  $namePicture = $_FILES['picture']['name'];
  move_uploaded_file($_FILES['picture']['tmp_name'], "images/" . $namePicture);
  $queryInsert = $bdd->prepare("UPDATE articles SET picture = :picture WHERE id = :id");
  $queryInsert->execute(array(':picture' => $namePicture, ':id'=>$id));

}

$description = $_REQUEST['description'];
$bio = $_REQUEST['bio'];
$tag = [$type,$bio];
if($bio == 'bio'){
  $bio = 'y';
}
else{
  $bio = 'n';
}

$queryInsert = $bdd->prepare("UPDATE articles SET name = :name, prix = :price, venteBool= :venteBool, provenance= :provenance, description = :description, type= :type, bio = :bio WHERE id = :id");
$queryInsert->execute(array(':name' =>$name, ':price'=>$price, ':venteBool' =>'y', ':provenance'=>$provenance, ':description'=>$description, ':type'=>$type, ':bio'=>$bio, ':id'=>$id));

header('Location:modifArticleList.php');
?>