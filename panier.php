<!DOCTYPE HTML>
<html>
	<head>
		<title>Daisy Website Template | Home :: w3layouts</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link href="css/panier.css" rel='stylesheet' type='text/css' />

   		 <!-- Custom Theme files -->
   		  <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
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
	<body>
		<?php
		session_start();
		?>
<?php
  include "header.php";
  include "configbdd.php";
?>

			<!---- header-info ---->
		<div class="container">
			<h2>Panier</h2>
		</div>
	</div>
	<div class="clearfix"> </div>
	<!---- header-info ---->
	<!--- about-us ---->
	<div id="about" class="about">
		<div class="container">
			<?php
			if(!isset($_SESSION['panier'])){
				echo "<p>Votre panier est vide</p>";
			}
			else{
				$total = 0;
				?>
				<div class="containerAllPanier">
					<div class="containerAllArticle">
						<div class='headPanier'>
							<div class='infoArticle'>
								<span>Photo</span>
							</div>
							<div class='infoArticle'>
								<span>Articles</span>
							</div>
							<div class='infoArticle'>
								<span>Quantité</span>
							</div>
							<div class='infoArticle'>
								<span >Supprimer du panier</span>
							</div>
						</div>
					<?php
					foreach ($_SESSION['panier'] as $article ){
						$query = $bdd->query("SELECT * FROM articles WHERE id=".key($_SESSION['panier']))->fetch();
						$total += $article * $query['prix'];
						?>

						<div class="containerArticle">
							<img src="images/<?php echo $query['picture']?>" alt="pictureArticle">
							<div class="namePrixArticle">
								<p class="infoArticle"><?php echo $query['name']?></p>
								<p class="infoArticle"><?php echo $query['prix']?>€</p>
							</div>
							<div class="quantityTotalArticle">
								<p class="infoArticle" id="quantityOneArticle">quantité : <?php echo $article?></p>
								<p class="infoArticle" id="totalOneArticle">total pour cet article : <?php echo $article*$query['prix']?>€</p>
							</div>
							<a href="delArticlePanier.php?idToDel=<?php echo key($_SESSION['panier']) ?>">Supprimer l'article</a>
						</div>
					<?php
					}
					?>
					</div>
					<div class="totalPanier">
						<h4>Total (prix approximatif) : <?php echo $total ?>€</h4>
						<input type="submit" value="Envoyer ma commande">
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</body>
</html>