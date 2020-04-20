<!DOCTYPE HTML>
<html>
	<head>
		<title>Daisy Website Template | Home :: w3layouts</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />

		 <!---- start-smoth-scrolling---->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!----//End-top-nav-script---->

	</head>
	<body>
  <?php
  session_start();
  ?>
  <div class="containerAdminAll">
  <?php include "sidebarAdmin.php" ?>
  <?php
  include "configbdd.php";
  if(!isset($_SESSION['id'])){
    header("Location : index.php");
  }
  ?>
  <div class="containerAdmin">
    <?php include "header.php" ?>
    <style type="text/css">
    .bg {
      background : #eceef2
    }
    </style>

    <!---- header-info ---->
    <div class="header-info text-center">
      <div class="container">
        <h2>Bienvenue sur le pannel admin !</h2>
    </div>
  </div>

	</body>
</html>