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
        <h1 ><span class='spanModifUser'> </span>Modifier mon Profil<span class='spanModifUser'> </span></h1>
      </div>
    </div>
    <?php
			if(!isset($_SESSION['id'])){
				header('Location:connexion.php');
			}
      $idUser = $_SESSION['id'];
			$user = $bdd->query("SELECT * FROM users WHERE id=$idUser")->fetch();
			
    ?>

		<div class="containerPartsUpdate">
			
			<div class="informationUpdateContainer">
			<?php 
				if(isset($_REQUEST['errorPass'])){
					echo "<p class='errorPassword'>Votre mot de passe ne correspond pas</p>";
				}
			?>
				<h2>Informations personnelles</h2>
				<div class="containerInputUpdate">
					<p>Prénom</p>
					<form action="modifUser.php" method="post">
					<input type="text" name='firstname' value="<?php echo $user['firstname'] ?>">
				</div>
				<div class="containerInputUpdate">
					<p>Nom</p>
					<input type="text" name='lastname' value="<?php echo $user['lastname'] ?>">
				</div>
				<div class="containerInputUpdate">
					<p>Email</p>
					<input type="text" name='email' value="<?php echo $user['email'] ?>">
				</div>
			</div>
			<div class="informationUpdateContainer">
				<h2>Adresse</h2>
				<div class="containerInputUpdate">
					<p>Ville</p>
					<input type="text" name='ville' value="<?php echo $user['ville'] ?>">
				</div>
				<div class="containerInputUpdate">
					<p>Code postal</p>
					<input type="text" name='code_postal' value="<?php
					if($user['code_postal'] == 0 || $user['code_postal'] == ''){
						echo '';
					}
					else{
					echo $user['code_postal'];
					} ?>">
				</div>
				<div class="containerInputUpdate">
					<p>Adresse</p>
					<input type="text" name='adresse' value="<?php echo $user['adresse'] ?>">
				</div>
			</div>
			<div class="informationUpdateContainer">
				<h2>Coordonnées</h2>
				<div class="containerInputUpdate">
					<p>Téléphone portable</p>
					<input type="tel" name='telephone_p' pattern='^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$' value="<?php
					if($user['telephone_p'] == 0 || $user['telephone_p'] == ''){
						echo '';
					}
					else{
					echo $user['telephone_p'];
					} ?>">
				</div>
				<div class="containerInputUpdate">
					<p>Téléphone Fixe</p>
					<input type="tel" name='telephone_f' pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" value="<?php
					if($user['telephone_f'] == 0 || $user['telephone_f'] == ''){
						echo '';
					}
					else{
					echo $user['telephone_f'];
					} ?>">
				</div>
			</div>
			<div class="informationUpdateContainer">
				<h2>Mot de passe</h2>
				<div class="containerInputUpdate">
					<p>Confirmer votre </br>mot de passe</p>
					<input name='passwordConfirm' type="password">
				</div>
			</div>
		</div>
		<div class="containerSubmitUpdate">
				<input type="submit" value='confirmer'>
				</form>
		</div>
	</div>
</body>
</html>