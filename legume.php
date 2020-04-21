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
	<body>
		<?php
		session_start();
		?>
<?php
  include "header.php";
  include "configbdd.php";
?>

			<!---- header-info ---->
			<div class="header-info text-center">
				<div class="container">
					<h1><span> </span><label>LEGUMES</label><span> </span></h1>
					<p>Choisissez vos légumes en déscendant la page</p>
				</div>
			</div>
			</div>
			<div class="clearfix"> </div>
			<!---- header-info ---->
			<!--- about-us ---->
			<div id="about" class="about">
				<div class="container">
					<div class="containerPrintArticle">
					<?php
				$requete = $bdd->query("SELECT * FROM articles WHERE type='l'");
        ?>
        <h3>Légumes disponible :</h3>
        <div style='overflow-x:auto;'>
          <table>
            <thead>
              <tr>
								<th>Photo</th>
                <th>Nom de l'article</th>
								<th>Provenance</th>
								<th>Prix</th>
								<th>Quantité</th>
                <th>Ajouter au panier</th>
              </tr>
            </thead>
            <tbody class='tableau'>
              <?php
              

              while ( $articles = $requete->fetch()){
              echo "<tr>";
              if ($articles['type'] == 'f' ) {
                $type = 'Fruit' ;
              }
              elseif ($articles['type'] == 'l' ) {
                $type = 'Légume' ;
              }

              if ($articles['venteBool'] == 'y' ) {
                $vente = 'Oui' ;
              }
              elseif ($articles['venteBool'] == 'n' ) {
                $vente = 'Non' ;
							}
							echo "<td><img src='images/".$articles['picture'] ."' alt='photo de l'article'></td>";
							echo "<td>". $articles['name']."</td>" ;
							echo "<td>". $articles['provenance']."</td>" ;
							echo "<td>". $articles['prix']."</td>" ;
							echo "<td>". "<form action='addArticleToPanier.php'> <input type='hidden' value='l' name='page'> <input type='hidden' value= '" .$articles['id']."' name='id'> <input name ='quantity' type='number' min=0 required>"."</td>" ;
							echo "<td>" . "<input type='submit' value='Ajouter au panier'> </form>" ."</td>";
							echo "</tr>";
              }
							?>
						</tbody>
          </table>
        </div>
			</div>
	</body>
</html>