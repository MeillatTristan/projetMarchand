<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

<nav class="top-nav">
	<ul class="top-nav">
		<li>
			<img src="images/home.png" alt="icone Accueil">
			<a href="index.php">Accueil</a>
		</li>
		<li>
			<img src="images/iconLegume.png" alt="icone Legume">
			<a href="legume.php">Légumes</a>
		</li>
		<li>
		<img src="images/iconFruit.png" alt="icone Fruit">
			<a href="fruit.php">Fruits</a>
		</li>
		<li class='panier'>
			<img src="images/shopping-cart.png" alt="icone panier">
			<a href="panier.php">Panier</a>
			<?php
				if(!isset($_SESSION['panier'])){
					echo "<span class='totalArticle'>0</span>";
				}
				else{
					$totalArticle = count($_SESSION['panier']);
					echo "<span class='totalArticle'>$totalArticle</span>";
				}
			?>
		</li>
		<?php
		if (!isset($_SESSION['id'])) {
			echo "<li> <img src='images/sign-in.png' alt='icone connexion'><a href='connexion.php'>Connexion</a></li>" ;
		}

		if(isset($_SESSION['id'])){
			echo "<li><img src='images/sign-in.png' alt='icone déconnexion'><a href='deconnexion.php'>Déconnexion</a></li>";
		}
		?>
	</ul>
</nav>