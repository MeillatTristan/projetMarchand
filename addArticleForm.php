<!DOCTYPE HTML>
<html>
	<head>
		<title>Daisy Website Template | Home :: w3layouts</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />

		 <!---- start-smoth-scrolling---->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!----//End-top-nav-script---->

	</head>
	<body>
  <?php
  session_start();
  ?>
  <div class="containerAdminAll">
  <?php include "sidebarAdmin.php" ?>
  <?php
  include "configbdd.php";
  if(!isset($_SESSION['id'])){
    header("Location : index.php");
  }
  ?>
  <div class="containerAdmin">
    <?php include "header.php" ?>
    <style type="text/css">
    .bg {
      background : #fff
    }
    </style>

    <!---- header-info ---->
    <div class="header-info text-center">
      <div class="container">
        <h2>ajouter un article</h2>
        <?php
        if( isset($_REQUEST['good']) && $_REQUEST['good'] == 'f'){
          echo "<p class='falsePass'>Une erreur est servenu</p>";
        }
        elseif(isset($_REQUEST['good']) && $_REQUEST['good'] == 'y'){
          echo "<p class='goodPass'>L'article à parfaitement été sauvegardé</p>";
        }
        ?>
      </div>
      <form action="addArticle.php" class="formAddArticle" method="post" enctype="multipart/form-data">
        <input type="text" name="name" required placeholder="Nom de l'article">
        <select name="type" id="type"  required placeholder="Type de l'article">
          <option value="l">Légume</option>
          <option value="f">Fruit</option>
        </select>
        <input type="text" name="quantity" required placeholder="Quantité">
        <input type="text" name="price" placeholder="Prix" required>
        <input type="text" name="provenance" placeholder="Provenance" required>
        <div class="uploadPicture">
          <label for="pictureLabel">Photo de l'article :</label>
          <input type="file" id="picture" name="picture" accept="image/*" required>
        </div>
        <input type="submit" value="Sauvegarder">
      </form>
    </div>
    </div>
  </div>
  </div>

	</body>
</html>