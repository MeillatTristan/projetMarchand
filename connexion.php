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

	<div class="backlogin">
		<?php
		include "header.php";
		include "configbdd.php";
		?>
		<div class="groundlogin">
			<div class="backgroundcolor">
				<div class="header-info text-center">
					<div class="container">
						<h2 id="connexion">Connexion</h2>
					</div>
					<form class="coo" action="authUser.php">
						<div class="imgconnexion">
							<img id="enveloppe" src="images/envelope.png" alt="">
							<input id="coordonne" type="text" name="email" required placeholder="Email">
						</div>
						<div class="imgconnexion">
							<img id="key" src="images/key.png" alt="">
							<input id="coordonne" type="password" name="password" required placeholder="Mot de Passe">
						</div>
						<input id="button_coo" type="submit" value="Login">
						<a href="">Mot de passe ou Email oublié ?</a>
						<a href="">Pas de compte ? Inscrivez-vous !</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>