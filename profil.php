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
		if(!isset($_SESSION['id'])){
			header('Location:connexion.php');
		}
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
        <h1><span> </span>Profil<span> </span></h1>
      </div>
    </div>
    <?php
      $idUser = $_SESSION['id'];
      $user = $bdd->query("SELECT * FROM users WHERE id=$idUser")->fetch();
    ?>
		<div class="containerBlocProfil">
			<div class="headerProfil">
				<h2><?php echo ucfirst($user['firstname']) .' '. ucfirst($user['lastname']) ?></h2>
				<div class="modifProfil">
					<a id='firstButton' href="modifPassword.php">Modifier mon mot de passe</a>
					<a href="modifUserForm.php">Modifier mes informations</a>
				</div>
			</div>
			<div class="containerInformations">
				<div class="informationProfil">
					<p>Email</p>
					<p><?php echo $user['email'] ?></p>
				</div>
				<div class="informationProfil">
					<p>Ville</p>
					<?php
						if ($user['ville'] == ''){
							echo "<p>Non renseigné</p>";
						}
						else{
							echo "<p>". $user['ville']."</p>";
						}
					?>
				</div>
				<div class="informationProfil">
					<p>Code postale</p>
					<?php
						if ($user['code_postal'] == '' || $user['telephone_p'] == 0){
							echo "<p>Non renseigné</p>";
						}
						else{
							echo "<p>". $user['code_postal']."</p>";
						}
					?>
				</div>
				<div class="informationProfil">
					<p>Adresse</p>
					<?php
						if ($user['adresse'] == ''){
							echo "<p>Non renseigné</p>";
						}
						else{
							echo "<p>". $user['adresse']."</p>";
						}
					?>
				</div>
				<div class="informationProfil">
					<p>Téléphone portable</p>
					<?php
						if ($user['telephone_p'] == '' || $user['telephone_p'] == 0){
							echo "<p>Non renseigné</p>";
						}
						else{
							echo "<p>". $user['telephone_p']."</p>";
						}
					?>
				</div>
				<div class="informationProfil">
					<p>Téléphone fix</p>
					<?php
						if ($user['telephone_f'] == ''){
							echo "<p>Non renseigné</p>";
						}
						else{
							echo "<p>". $user['telephone_f']."</p>";
						}
					?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>