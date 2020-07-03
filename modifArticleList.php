<!DOCTYPE HTML>
<html>

<head>
  <title>Salah Primeur | Modifier un article</title>
  <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <!-- Custom Theme files -->
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <script src="https://kit.fontawesome.com/836a2159df.js" crossorigin="anonymous"></script>


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
  <?php
  $requete = $bdd->query('SELECT * FROM articles');
  ?>
  <h2>Modification d'articles :</h2>
  <?php include "headerAdmin.php"; ?>
  <div class="containerPrintArticle">
		<?php
		$requete = $bdd->query("SELECT * FROM articles WHERE venteBool='y'");
		if($requete->fetch() == FALSE){
			echo "< class='articleNull'>Il n'y a plus d'articles' pour le moment</p>";
		}
		else{
		?>
			<div class="allFiltre">
				<label class="filtre">Bio
					<input type="checkbox" id='checkmarkBio' onclick="filtre('bio', 'checkmarkBio')">
					<span class="checkmark"></span>
				</label>
				<label class="filtre">Fruits
					<input type="checkbox" id='checkmarkFruit' onclick="filtre('fruit','checkmarkFruit')">
					<span class="checkmark"></span>
				</label>
				<label class="filtre">Légumes
					<input type="checkbox" id='checkmarkLegume' onclick="filtre('legume', 'checkmarkLegume')">
					<span class="checkmark"></span>
				</label>
				<div class="containerSearch">
					<input type="text" id="inputRecherche" placeholder="Rechercher..." onkeyup="recherche(this.value)">
					<i class="fas fa-search"></i>
					<span class="backgroundSearchIcon"></span>
				</div>
			</div>
			<div class="allArticle">
				<?php

				$query = $bdd->query("SELECT * FROM articles WHERE venteBool='y'  ORDER BY promo DESC");
				while ( $articles = $query->fetch()){
					$idArticle = $articles['id'];
					?>
					<div class="article modifArticle
					<?php
						if($articles['bio'] == 'y'){
							echo "bio ";
						}
						echo $articles['type'];
					?>">
					<?php 
						if($articles['promo'] == 'y'){
							echo "<span class='triangleTopRight'></span>";
							echo "<span class='textTriangle'>%</span>";	
						}
					?>
					<?php
						echo "<img class='imgArticle' src='images/".$articles['picture'] ."' alt='photo de l'article'>";
						echo "<div class='containerNamePrice'> <p class='nameArticle'>". $articles['name']."</p>" ;
						echo "<p class='priceArticle'><span></span>". $articles['prix']."€</p> </div>" ;
						echo "<div class='containerProvenanceSubmit'><p class='provenanceArticle'>". $articles['provenance']."</p>" ;
						echo "<div class='midBlock'><p>Modifier cet article</p><a href='modifArticleForm.php?idArticle=". $articles['id'] ."' class='linkToModif'></a></div></div>";
					?>
					</div>
					<?php
				}
				
				?>
			</div>
			<?php } ?>
		</div>

</body>

</html>