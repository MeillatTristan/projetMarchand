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
	<body id='body'>
		<?php
		session_start();
		?>
	<div class="containerAll">
	<?php
	include "sidebar.php";
	include "header.php";
	include "configbdd.php";
	?>

		<!---- header-info ---->
		<div class="container ">
		<div class="header-info text-center">
			<div class="containerTitle">
				<div class="bgHeaderFruits">
				</div>
				<h1><span> </span>Fruits<span> </span></h1>
			</div>
		</div>
	<!--- Affichage Fruits ---->
	<div id="about" class="about">
		<div class="container">
			<div class="containerPrintArticle">
			<?php
			$requete = $bdd->query("SELECT * FROM articles WHERE type='f' AND venteBool='y'");
			if($requete->fetch() == FALSE){
				echo "< class='articleNull'>Il n'y a plus de fruits pour le moment</p>";
			}
			else{
			$requete = $bdd->query("SELECT * FROM articles WHERE type='f' AND venteBool='y'");
			?>
				<?php
					if(isset($_REQUEST['falseQuantity'])){
						echo "<p>Merci de rentrer une quantité uniquement composé de chiffre</p>";
					}
				?>
				<div class="allArticle">
					<?php

					$query = $bdd->query("SELECT * FROM articles WHERE type='f' AND venteBool='y'");
					while ( $articles = $query->fetch()){
						?>
						<div class="article">
						<?php
							echo "<img class='imgArticle' src='images/".$articles['picture'] ."' alt='photo de l'article'>";
							echo "<div class='containerNamePrice'> <p class='nameArticle'>". $articles['name']."</p>" ;
							echo "<p class='priceArticle'><span></span>". $articles['prix']."€</p> </div>" ;
							echo "<div class='containerProvenanceSubmit'><p class='provenanceArticle'>". $articles['provenance']."</p>" ;
							echo "<form action='addArticleToPanier.php'> <input type='hidden' value='f' name='page'> <input type='hidden' value= '" .$articles['id']."' name='id'> " ;
							echo "<button type='sumbit' name='inputSubmit'><img src='images/panier.png'</button> </form></div>";
						?>
						</div>
						<?php
					}
					
					?>
				</div>
				<?php } ?>
			</div>
		</div>
	</body>
</html>