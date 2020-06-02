<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

<nav class="top-nav">
	<ul class="top-nav">
		<li>
			<a href="index.php">
			<img src="images/home.png" alt="icone Accueil">Accueil
			</a>
		</li>
		<li>
			<a href="legume.php">
			<img src="images/iconLegume.png" alt="icone Legume">Légumes
			</a>
		</li>
		<li>
			<a href="fruit.php">
			<img src="images/iconFruit.png" alt="icone Fruit">Fruits
			</a>
		</li>
		<li class='panier'>
			<a href="panier.php">
			<img src="images/shopping-cart.png" alt="icone panier">Panier
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
			echo "<li> <a href='connexion.php'><img src='images/sign-in.png' alt='icone connexion'>Connexion</a></li>";
		}

		if (isset($_SESSION['id'])) {
			echo "<li> <a href='deconnexion.php'><img src='images/sign-in.png' alt='icone déconnexion'>Déconnexion</a></li>";
		}
		?>
	</ul>
</nav>