<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link href="css/style.css" rel='stylesheet' type='text/css' />

<nav class="top-nav">
	<ul class="top-nav">
		<li>
			<a href="index.php">Accueil
			<img src="images/home.png" alt="icone Accueil">
			</a>
		</li>
		<li>
			<a href="legume.php">Légumes
			<img src="images/iconLegume.png" alt="icone Legume">
			</a>
		</li>
		<li>
			<a href="fruit.php">Fruits
			<img src="images/iconFruit.png" alt="icone Fruit">
			</a>
		</li>
		<li class='panier'>
			<a href="panier.php">Panier
			<img src="images/shopping-cart.png" alt="icone panier">
			</a>
			<?php
			if (!isset($_SESSION['panier'])) {
				echo "<span class='totalArticle'>0</span>";
			} else {
				$totalArticle = count($_SESSION['panier']);
				echo "<span class='totalArticle'>$totalArticle</span>";
			}
			?>
		</li>
		<?php
		if (!isset($_SESSION['id'])) {
			echo "<li> <a href='connexion.php'>Connexion<img src='images/sign-in.png' alt='icone connexion'></a></li>";
		}

		if (isset($_SESSION['id'])) {
			echo "<li> <a href='deconnexion.php'>Déconnexion<img src='images/sign-in.png' alt='icone déconnexion'></a></li>";
		}
		?>
	</ul>
</nav>