<!DOCTYPE HTML>
<html class='toHeight'>
	<head>
		<title>Salah primeur | Statistiques </title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />

		 <!---- start-smoth-scrolling---->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!----//End-top-nav-script---->

	</head>
	<body id='body'>
  <?php
  session_start();
  ?>
  <div class="containerAdminAll">
  <?php
  include "configbdd.php";
  if(!isset($_SESSION['id'])){
    header("Location : index.php");
  }
  $idUser = $_SESSION['id'];
  $admin = $bdd->query("SELECT admin FROM users WHERE id = $idUser")->fetch()[0];
  if ($admin != 'y') {
    header("Location : index.php");
  }
  ?>
  <div class="containerAdmin">
    <?php include "header.php" ?>
    <?php include "sidebar.php" ?>

<!---- header-info ---->
    <div class="header-info text-center">
      <h2>Statistiques</h2>
    </div>
    <?php include "headerAdmin.php" ?>
    <p class='panierVide'>Les statistiques ne sont pas encore disponible</p>
	</body>
</html>