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
		 <!---- start-smoth-scrolling---->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>

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
				<h1><span class='spanModifUser'> </span>Mot de passe<span class='spanModifUser'> </span></h1>
			</div>
		</div>
		<?php
			$idUser = $_SESSION['id'];
      $user = $bdd->query("SELECT * FROM users WHERE id=$idUser")->fetch();
		?>
		<div id="containerModifPassword" class="informationUpdateContainer">
			<h2>Changer de mot de passe</h2>
			<div class="containerInputUpdate">
				<p>Ancien mot de passe</p>
				<form action="modifUser.php" method="post">
				<input type="text" name='lastPassword' >
			</div>
			<div class="containerInputUpdate">
				<p>Nouveau mot de passe</p>
				<input type="text" name='newPassword'>
			</div>
			<div class="containerInputUpdate">
				<p>Confirmer le nouveau mot de passe</p>
				<input type="text" name='confirmPassword'>
			</div>
		</div>
		<div class="containerSubmitUpdate">
			<input type="submit" value='confirmer'>
			</form>
		</div>
	</div>

</body>
</html>

