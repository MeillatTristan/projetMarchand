<?php

session_start();
include "configbdd.php";

if(!isset($_SESSION['id'])){
  header("Location:errorAuth.php");
}
if(!$_SERVER["REQUEST_METHOD"] == "POST"){
  header('Location: addArticleForm.php?good=f');
}



$name = $_REQUEST['name'];
$type = $_REQUEST['type'];
$quantity = $_REQUEST['quantity'];
$price = $_REQUEST['price'];
$provenance = $_REQUEST['provenance'];
$namePicture = $_FILES['picture']['name'];

move_uploaded_file($_FILES['picture']['tmp_name'], "images/" . $namePicture);
$queryInsert = $bdd->prepare("INSERT INTO articles SET name = :name, type = :type, prix = :price, quantity = :quantity, picture = :picture, venteBool= :venteBool, provenance= :provenance");
$queryInsert->execute(array(':name' =>$name,':type'=> $type, ':price'=>$price, ':quantity'=>$quantity, ':picture' => $namePicture, ':venteBool' =>'y', ':provenance'=>$provenance));
header('Location: addArticleForm.php?good=y');


?>