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
      $idUser = $_SESSION['id'];
      $user = $bdd->query("SELECT * FROM users WHERE id=$idUser")->fetch();
    ?>
		<div class="informationPerso">
      <h2>Informations personnelles</h2>
      <div class="firstname">
        <p>Prénom</p>
        <form action="modifUser.php" method="post">
        <input type="text" name='firstname' value="<?php echo $user['firstname'] ?>">
      </div>
      <div class="email">
        <p>Nom</p>
        <input type="text" name='lastname' value="<?php echo $user['lastname'] ?>">
      </div>
      <div class="lastname">
        <p>Email</p>
        <input type="text" name='email' value="<?php echo $user['email'] ?>">
      </div>
      </form>
    </div>
	</div>
</body>
</html>