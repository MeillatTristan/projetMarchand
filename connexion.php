<!DOCTYPE HTML>
<html>
	<head>
		<title>Daisy Website Template | Home :: w3layouts</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link href="css/connexion.css" rel='stylesheet' type='text/css' />

		 <!---- start-smoth-scrolling---->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!----//End-top-nav-script---->

	</head>
	<body>
  <?php
  session_start();
  ?>


<div class="containerAdmin">
<?php
include "header.php";
include "configbdd.php";
?>

<style type="text/css">
.bg {
  background : #fff
}

</style>

			<!---- header-info ---->
			<div class="header-info text-center">
				<div class="container">
					<h2>Connexion</h2>
					<h5>Connectez-vous ici</h5>
        </div>
        <form class="coo" action="authUser.php">
					<span>Entrez votre adresse Email :</span>
					<input type="text" name="email" required placeholder=" Adresse Email">
					<span>Entrez votre mot de passe :</span>
					<input type="password" name="password" required placeholder=" Mot de Passe">
					<br>
          <input class="button_coo" type="submit" value="Connexion">
        </form>
			</div>
			</div>
	</body>
</html>