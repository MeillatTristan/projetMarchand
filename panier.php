<!DOCTYPE HTML>
<html>
	<head>
		<title>Daisy Website Template | Home :: w3layouts</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />

   		 <!-- Custom Theme files -->
   		  <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script src="js/script.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1500);
				});
			});
		</script>
		 <!---- start-smoth-scrolling---->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->

	</head>
	<body id="body">
		<?php
		session_start();
		?>
	<div class="containerAll">
		<?php
		include "header.php";
		include "sidebar.php";
		include "configbdd.php";
		?>

			<!---- header-info ---->
			<div class="header-info text-center">
			<div class="containerTitle">
				<div class="bgHeaderPanier"></div>
				<h1><span> </span>Panier<span> </span></h1>
			</div>
		</div>
		<div class="clearfix"> </div>
		<!---- header-info ---->
		<!--- about-us ---->
		<div id="about" class="about">
			<div class="container">
				<?php
				if(!isset($_SESSION['panier'])){
					if(isset($_REQUEST['commande'])){
						echo "<p class='panierVide'> Merci pour votre commande ! </p>";
					}
					else{
					echo "<p class='panierVide' >Votre panier est vide</p>";
					}
				}
				else{
					$total = 0;
					?>
					<div class="containerAllPanier">
						<div class="containerAllArticle">
							<div class='headPanier'>
								<div class="photoArticle"></div>
								<div class='nameArticle'>
									<span>Articles</span>
								</div>
								<div class='quantityArticle'>
									<span>Quantité</span>
								</div>
								<div class="priceArticle">
									<span>Prix</span>
								</div>
								<div class='delArticle'>
								</div>
							</div>
						<?php
						foreach ($_SESSION['panier'] as $article ){
							$query = $bdd->query("SELECT * FROM articles WHERE id=".$article[0])->fetch();
							$total += $article[1] * $query['prix'];
							?>

							<div class="containerArticle">
								<div class='photoArticle'>
									<img src="images/<?php echo $query['picture']?>" alt="pictureArticle">
								</div>
								<p class="nameArticle"><?php echo $query['name']?></p>
								<div class="quantityArticle">
									<div class="containerQuantity">
										<input class="inputQuantity" type="button" value="-" onclick="quantityUpdate('-',<?php echo array_search($article, $_SESSION['panier']) ?>, <?php echo $query['prix'] ?>)">
										<div  class='viewQuantity' id="viewQuantity<?php echo array_search($article, $_SESSION['panier']) ?>"> <?php echo $article[1]?> </div>
										<input class="inputQuantity" type="button" value="+" onclick="quantityUpdate('+',<?php echo array_search($article, $_SESSION['panier']) ?>, <?php echo $query['prix'] ?>)">
									</div>
								</div>
								<p id='priceArticle<?php echo array_search($article, $_SESSION['panier']) ?>' class="priceArticle"><?php echo $article[1]*$query['prix']?>€</p>
								<div class="delArticle">
									<a href="delArticlePanier.php?idToDel=<?php echo key($_SESSION['panier']) ?>">×</a>
								</div>
							</div>
						<?php
						}
						?>
						</div>
						<div class="totalPanier">
							<h3 class="titleTotal">MONTANT DU PANIER</h3>
							<div class="totalAppro">
								<p>Total approximatif</p>
								<p id="totalPanier"><?php echo $total ?>€</p>
							</div>
							<div class="containerRemise">
								<p class="titleRemise">Remise</p>
								<form action="addCommande.php" method="post">
									<div class="livraisonEmporter" id="containerEmporter">
										<input type="radio" name="livraison" id="livraisonEmporter" value="e" onclick="changeRadioEmport()" required>
										<span class="checkmark"></span>
										<p>A emporter</p>
									</div>
									<div class="livraisonEmporter" id="containerDomicile">
										<input type="radio" name="livraison" id="livraisonDomicile" value="d" onclick="changeRadioDomicile()">
										<span class="checkmark"></span>
										<p for="livraisonDomicile">A domicile</p>
									</div>
							</div>
								<p class="titleDate">Date de livraison</p>
								<div class="dateLivraison">
									<img src="images/calendar-alt.png" alt="icone Date">
									<select required name="dateLivraison">
										<option value="" selected disabled>--Choisir une date--</option>
										<?php
											setlocale(LC_TIME, "fr_FR");
											$currentDate = date("d F Y");
											$days = ['lundi', 'mercredi', 'samedi'];
											$lieux = ['lundi'=>'Ecouflant', 'mercredi'=>'Angers', 'samedi'=> 'Villeveque'];
											for ($i=0; $i<=7; $i++){
												$nextDay = strtotime('+' . $i .'day', strtotime($currentDate));
												$nextDay = strftime(" %A %d %B %Y", $nextDay);
												foreach ($days as $day){
													if (strpos($nextDay,$day) == TRUE){
														$lieu = $lieux[$day];
														echo "<option value='$nextDay'>$nextDay  =>  lieu : $lieu</option>";
													}
												}
											}
										?>
									</select>
								</div>
								<div class="containerSubmitTotal">
									<input id="commandSubmit" type="submit" value="Valider ma commande">
								</div>
							</form>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>

