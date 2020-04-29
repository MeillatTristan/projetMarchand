<nav class="top-nav">
	<ul class="top-nav">
		<li><a href="index.php">Accueil</a></li>
		<li><a href="legume.php">Légumes</a></li>
		<li><a href="fruit.php">Fruits</a></li>
		<li><a href="panier.php">Panier</a></li>
		
		<?php
		include "configbdd.php";
		if (!isset($_SESSION['id'])) {
			echo "<li><a href='connexion.php'>Connexion</a></li>" ;
			echo "<li><a href='inscription.php'>Inscription</a></li>";
		}

		if(isset($_SESSION['id'])){
			$id = $_SESSION['id'];
			$query = $bdd->query("SELECT admin FROM users WHERE id=$id")->fetch()[0];
			if($query == 'y'){
				echo "<li><a href='pannelAdmin.php'>Gestion</a></li>";
			}
			echo "<li><a href='deconnexion.php'>Déconnexion</a></li>";
		}
		?>
	</ul>
	<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
</nav>
<div class="clearfix"> </div>