<!DOCTYPE HTML>
<html>

<head>
  <title>Salah Primeur | Modifier un article</title>
  <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <!-- Custom Theme files -->
  <link href="css/style.css" rel='stylesheet' type='text/css' />

  <!---- start-smoth-scrolling---->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!----//End-top-nav-script---->

</head>

<body id='body'>
  <?php
  session_start();

  ?>
  <?php include "sidebar.php" ?>
  <?php include "header.php" ?>
  <?php
  include "configbdd.php";
  if(!isset($_SESSION['id'])){
    header("Location : index.php");
  }
  $idUser = $_SESSION['id'];
  $admin = $bdd->query("SELECT admin FROM users WHERE id = $idUser")->fetch()[0];
  if ($admin != 'y') {
    header("Location : index.php");
  }
  ?>
    <!---- header-info ---->
  <div class="header-info text-center">
    <?php
    $requete = $bdd->query('SELECT * FROM articles');
    ?>
    <h2>Modification d'articles :</h2>
    <?php include "headerAdmin.php"; ?>
    <div class='allTable'>
      <div class="headList">
        <div class="nameArticle">
          <span class="spanHeadList">Nom de l'article</span>
        </div>
        <div class="typeArticle">
          <span class="spanHeadList">Fruit/légume</span>
        </div>
        <div class="quantityArticle">
          <span class="spanHeadList">Quantité</span>
        </div>
        <div class="prixArticle">
          <span class="spanHeadList">prix</span>
        </div>
        <div class="provenanceArticle">
          <span class="spanHeadList">provenance</span>
        </div>
        <div class="venteBoolArticle">
          <span class="spanHeadList">En vente</span>
        </div>
        <div class="pictureArticle">
          <span class="spanHeadList">Photo</span>
        </div>
        <div class="updateArticle">
          <span class="spanHeadList">modifier</span>
        </div>
      </div>
      <div class="bodyList">
      <?php

        while ($articles = $requete->fetch()) {
          echo "<tr>";
          if ($articles['type'] == 'f') {
            $type = 'Fruit';
          } elseif ($articles['type'] == 'l') {
            $type = 'Légume';
          }

          if ($articles['venteBool'] == 'y') {
            $vente = 'Oui';
          } elseif ($articles['venteBool'] == 'n') {
            $vente = 'Non';
          }
          echo " <div class='lineTable'><div class='nameArticle' >" . "<form action='modifArticle.php'>" . "<input type = 'hidden' value = '$articles[id]' name = 'idarticle'>" . "<input type='text' name='name' value='" . $articles['name'] ." ' >" . "</div>";
          echo "<div class='typeArticle'>" . "<select name='type' id='type'  required placeholder='Type de l\'article'> <option value='l'>Légume</option> <option value='f'>Fruit</option> </select>" . "</div>";
          echo "<div class='quantityArticle'>" . "<input type='text' name='quantity' value='" . $articles['quantity'] . " ' >" . "</div>";
          echo "<div class='prixArticle'>" . "<input type='text' name='prix' value='" . $articles['prix'] . " ' >" . "</div>";
          echo "<div class='provenanceArticle'>" . "<input  type='text' name='provenance' value='" . $articles['provenance'] . " ' >" . "</div>";
          echo "<div class='venteBoolArticle'>" . "<select name='VenteBool' id='vente'  required placeholder='En vente'> <option value='y'>Oui</option> <option value='n'>Non</option> </select>" . "</div>";
          echo "<div class='pictureArticle imgModif'><img src='images/".$articles['picture'] ."' alt='photo de l'article'> <label for='file' class='label-file'>Choisir une image</label> <input type='file' class='input-file' id='picture' name='picture' accept='image/*' ></div>"  ;
          echo "<div class='updateArticle'>" . "<button type='submit' name='modifyBook'>Modifier</button>" . "</div>" . "</form> </div>" ;
        }
        ?>
      </div>
    </div>
  </div>

</body>

</html>