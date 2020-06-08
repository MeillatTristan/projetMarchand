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
	<script src="js/script.js"></script>
</head>

<body class="body">
	<?php
	session_start();
	if (isset($_SESSION['id'])) {
		header('Location:index.php');
	}
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
					<form class="coo" id='coo' action="authUser.php">
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
					</form>
					<button id='buttonInscription' onclick="inscription()">Pas de compte ? Inscrivez-vous ! </button>
					<div id="background_inscription">
						<span class="close_inscription" onclick="close_inscription()">×</span>
						<div id="inscription_onclick">
							<h2>S'inscrire <span></span></h2>
							
							<h3>Les champs avec une <span class="red">*</span> sont obligatoire</h3>
							<form class="inscription" action='valid_user.php' onsubmit="return validForm()">
								<div class="first_contenant">
									<span>Nom <span class="red">*</span> :</span>
									<input type="text" name='lastname' id='lastname' required placeholder=' Nom'> </input>
									<span>Prénom <span class="red">*</span> :</span>
									<input type="text" name='firstname' id='firstname' required placeholder=' Prénom' autofocus=""> </input>
									<span>Adresse Email <span class="red">*</span> :</span>
									<input type="text" name='email' id='email' required placeholder=' Email'> </input>
									<span>Numéro de Télephone Portable <span class="red">*</span> :</span>
									<input class="" type="tel" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" name='telephone_p' id='telephone_p' required placeholder=' +33'> </input>
									<span>Numéro de Téléphone Fixe :</span>
									<input class="" type="tel" pattern ="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" name='telephone_f' id='telephone_f' placeholder=''> </input>
								</div>
								<div class="first_contenant">
									<span>Ville :</span>
									<input type="text" name='ville' id='ville' placeholder=' Ville'> </input>
									<span>Code Postal :</span>
									<input class="" type="text" name='code_postal' id='code_postal' placeholder=' Code Postal'> </input>
									<span>Adresse :</span>
									<input class="" type="text" name='adresse' id='adresse' placeholder=' Adresse'> </input>
									<span>Mot de passe <span class="red">*</span> :</span>
									<input class="" type="password" name='valid_mdp1' id='password_1' required placeholder=' ************'> </input>
									<span>Confirmation de mot de passe <span class="red">*</span> :</span>
									<input class="" type="password" name='valid_mdp2' id='password_2' required placeholder=' ************'> </input>
									<div class="contenant_button">
										<button class="button_inscription" type='submit' oninvalid="invalidForm()" name='valid_user'>S'INSCRIRE</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>