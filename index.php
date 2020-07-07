<!DOCTYPE HTML>
<html>

<head>
	<title>Salah Primeur | Accueil</title>
	<link rel="icon" href="favicon.ico" />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

	<!-- Custom Theme files -->
	<!---- start-smoth-scrolling---->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1500);
			});
		});
	</script>
	<!---- start-smoth-scrolling---->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	</script>
	<!----start-top-nav-script---->
	<script>
		$(function() {
			var pull = $('#pull');
			menu = $('nav ul');
			menuHeight = menu.height();
			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
			$(window).resize(function() {
				var w = $(window).width();
				if (w > 320 && menu.is(':hidden')) {
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
	include 'sidebar.php';
	include 'footer.php';
	?>

	<div id="top" class="bg">
		<!----- start-header---->
		<div id="home" class="header">
			<div class="top-header">
				<div class="container">
					<!----start-top-nav---->
					<?php include "header.php" ?>
				</div>
			</div>
		</div>

		<!---- header-info ---->
		<div class="header-info indexPage text-center">
			<div class="container title">
				<h1><span> </span><label>SALAH </label> PRIMEURS<span> </span></h1>
				<p id="marchand">Votre marchand</p>
				<p id="primeur">Votre primeur sélectionne pour vous les meilleurs fruits et légumes</p>
			</div>
		</div>	
	</div>
			<div class="clearfix"> </div>
			<!--- Information ---->
			<div class="information">
				<div class="info">
					<h2>Nos services</h2>
					<p id="textinfo">Précommandez sur le site les articles qui vous intéresse. Vous pourcez ensuite venir les chercher au lieu de votre choix. La livraison à domicile est également possible dans les zones indiquées.</p>
				</div>
				<div class="info">
					<h2>Les commandes</h2>
					<p id="textinfo">Effectuer votre commande avant 12h00 pour être livré dès le lendemain matin. </br> Cette dernière est modifiable jusqu'à ce que votre primeur la valide (sauf certains produits indiqués). </p>
				</div>
				<div class="info">
					<h2>Marchés</h2>
					<p id="textinfo">Votre marchand est aussi présent sur certains marchés :</p>
					<img src="" alt="">
				</div>
				<div class="infoimage">
					<img src="" alt="">
				</div>
			</div>	
			<!---- Map ---->
			<div class="map">
				<h2>Voici la carte, les livraisons a domicile ce passe exclusivement dans ces zones</h2>
				<img src="images/map.png" alt="">
			</div>
	<?php
		include 'footer.php'; 
	?>		
</body>

</html>