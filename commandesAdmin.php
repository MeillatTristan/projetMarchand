<!DOCTYPE HTML>
<html class='toHeight'>
	<head>
		<title>Salah primeur | Commandes Admin </title>
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
  <div class="containerAdminAll">
  <?php
  include "configbdd.php";
  if(!isset($_SESSION['id'])){
    header("Location : index.php");
  }
  ?>
  <div class="containerAdmin">
    <?php include "header.php" ?>
    <?php include "sidebar.php" ?>

<!---- header-info ---->
    <div class="header-info text-center">
      <h2>Commandes</h2>
    </div>
    <?php include "headerAdmin.php" ?>
    <h3>Commandes à valider</h3>
    <?php
      $commandes = $bdd->query("SELECT * FROM commandes WHERE validate = 'n'");
      if($commandes == false){
        echo "<p class='panierVide'>Vous n'avez pas de commandes à valider</p>";
      }
    ?>
    <div class="containerAllCommandes">
    <?php
    foreach ($commandes as $commande){
      ?>
      <div class="containerCommande">
        <div class="headerCommande">
          <div class="dateCommandeRecap">
            <p>COMMANDE EFFECTUÉ LE</p>
            <p><?php echo $commande['dateCommande'] ?></p>
          </div>
          <div class="dateLivraisonRecap">
            <p>COMMANDE REMISE LE</p>
            <p class='upperDiv'><?php echo $commande['dateRetrait'] ?></p>
          </div>
          <div class="totalCommande">
            <p>TOTAL</p>
            <p class='upperDiv'><?php echo $commande['price'] ?>€</p>
          </div>
          <div class="remiseCommande">
            <p>REMISE</p>
            <?php
              if($commande['retrait'] == 'e'){
                echo "<p class='upperDiv'>A emporter</p>";
              }
              elseif($commande['retrait'] == 'd'){
                echo "<p class='upperDiv'>A domicile</p>";
              }
            ?>
          </div>
          <div class="idCommande">
            <p>N° DE COMMANDE</p>
            <p class='upperDiv'><?php echo $commande['id'] ?> </p>
          </div>
        </div>
        <div class="bodyCommande">
          <?php
          $idCommande = $commande['id'];
            $articlesCommande = $bdd->query("SELECT * FROM liaisonCommande WHERE commandeID=$idCommande");
            foreach($articlesCommande as $articleCommande){
              $articleID = $articleCommande['ArticleID'];
              $article = $bdd->query("SELECT * FROM articles WHERE id=$articleID")->fetch();
              ?>
              <div class="containerArticle">
                <div class="photoArticleCommande">
                  <img src="<?php echo "images/" . $article['picture'] ?>" alt="pictureArticle">
                </div>
                <div class="infosArticles">
                  <p><?php echo $article['name'] ?></p>
                  <p>Quantité: <?php echo $articleCommande['quantity'] ?> </p>
                  <p><?php echo $article['prix'] ?>€</p>
                </div>
                <div class="containerAddToPanier">
                <form action='addArticleToPanier.php'>
                  <input type='hidden' value='c' name='page'>
                  <input type='hidden' value= ' <?php echo $article['id'] ?>' name='id'>
                  <button class='buttonAdd' type='sumbit'><span>Commander à nouveau</span> <img src='images/panier.png'></button> 
                </form>
                </div>
              </div>
              <?php
            }
          ?>
        </div>
      </div>
      <?php
    }
    ?>
    </div>
    <h3>Commandes archiver</h3>
    <?php
      $commandes = $bdd->query("SELECT * FROM commandes WHERE validate = 'y'");
      if($commandes == false){
        echo "<p class='panierVide'>Aucune commande n'est archivé</p>";
      }
    ?>
    <div class="containerAllCommandes">
    <?php
    foreach ($commandes as $commande){
      ?>
      <div class="containerCommande">
        <div class="headerCommande">
          <div class="dateCommandeRecap">
            <p>COMMANDE EFFECTUÉ LE</p>
            <p><?php echo $commande['dateCommande'] ?></p>
          </div>
          <div class="dateLivraisonRecap">
            <p>COMMANDE REMISE LE</p>
            <p class='upperDiv'><?php echo $commande['dateRetrait'] ?></p>
          </div>
          <div class="totalCommande">
            <p>TOTAL</p>
            <p class='upperDiv'><?php echo $commande['price'] ?>€</p>
          </div>
          <div class="remiseCommande">
            <p>REMISE</p>
            <?php
              if($commande['retrait'] == 'e'){
                echo "<p class='upperDiv'>A emporter</p>";
              }
              elseif($commande['retrait'] == 'd'){
                echo "<p class='upperDiv'>A domicile</p>";
              }
            ?>
          </div>
          <div class="idCommande">
            <p>N° DE COMMANDE</p>
            <p class='upperDiv'><?php echo $commande['id'] ?> </p>
          </div>
        </div>
        <div class="bodyCommande">
          <?php
          $idCommande = $commande['id'];
            $articlesCommande = $bdd->query("SELECT * FROM liaisonCommande WHERE commandeID=$idCommande");
            foreach($articlesCommande as $articleCommande){
              $articleID = $articleCommande['ArticleID'];
              $article = $bdd->query("SELECT * FROM articles WHERE id=$articleID")->fetch();
              ?>
              <div class="containerArticle">
                <div class="photoArticleCommande">
                  <img src="<?php echo "images/" . $article['picture'] ?>" alt="pictureArticle">
                </div>
                <div class="infosArticles">
                  <p><?php echo $article['name'] ?></p>
                  <p>Quantité: <?php echo $articleCommande['quantity'] ?> </p>
                  <p><?php echo $article['prix'] ?>€</p>
                </div>
                <div class="containerAddToPanier">
                <form action='addArticleToPanier.php'>
                  <input type='hidden' value='c' name='page'>
                  <input type='hidden' value= ' <?php echo $article['id'] ?>' name='id'>
                  <button class='buttonAdd' type='sumbit'><span>Commander à nouveau</span> <img src='images/panier.png'></button> 
                </form>
                </div>
              </div>
              <?php
            }
          ?>
        </div>
      </div>
      <?php
    }
    ?>
    </div>
	</body>
</html>