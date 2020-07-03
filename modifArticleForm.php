<!DOCTYPE HTML>
<html id="body">

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

<body id="body">
  <?php
  session_start();

  ?>
  <div class="containerAdminAll">
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
  include "header.php";
  include "sidebar.php";
  ?>

    <!---- header-info ---->
    <div class="header-info text-center">
      <div class="titleAdd">
        <h2>Modifier un article</h2>
        <?php include "headerAdmin.php" ?>
        <?php
        if (isset($_REQUEST['good']) && $_REQUEST['good'] == 'f') {
          echo "<p class='falsePass'>Une erreur est servenu</p>";
        } elseif (isset($_REQUEST['good']) && $_REQUEST['good'] == 'y') {
          echo "<p class='goodPass'>L'article à parfaitement été sauvegardé</p>";
        }
        $idArticle = $_REQUEST['idArticle'];
        $article =  $bdd->query("SELECT * FROM articles WHERE id = $idArticle")->fetch();
        ?>
      </div>
      <div class="formarticle" >
        <form action="modifArticle.php" class="formAddArticle" method="post" enctype="multipart/form-data">
          <input type="text" name='id' hidden value = <?php echo $article['id'] ?>>
          <input type="text" name="name" required value = <?php echo $article['name'] ?>>
          <input type="text" name="provenance" value = <?php echo $article['provenance'] ?> required>
          <select name="type" id="type" required placeholder=" Type de l'article">
            <?php
            if($article['type'] == 'legume'){
              ?>
              <option value="legume">Légume</option>
              <option value="fruit">Fruit</option>
              </select>
              <?php
            }
            else{
              ?>
              <option value="fruit">Fruit</option>
              <option value="legume">Légume</option>
              </select>
              <?php
            }
            ?>
          <div class="containerPrice">
            <input type="text" name="price" value = <?php echo $article['prix'] ?> required>
            <span>€</span>
          </div>
          <div class="uploadPicture">
            <img class='picturePreviewModif' src="images/<?php echo $article['picture'] ?>" alt="photo actuelle">
            <label for="pictureLabel">Photo de l'article :</label>
            <input type="file" id="picture" name="picture" accept="image/*" >
          </div>
          <div>
            <input type="checkbox" value='bio' name="bio" <?php 
            if ($article['bio'] == 'y'){
              ?>
              checked
              <?php
            } ?> >
            <label for="bio">Bio</label>
          </div>
          <textarea name="description" rows="5" cols="33" value = <?php echo $article['description'] ?>></textarea>
          <input type="submit" value="Valider">
        </form>
      </div>
    </div>
  </div>
  </div>
  </div>

</body>

</html>