<nav class="top-nav">
	<ul class="top-nav">
		<li><a href="index.php">Accueil</a></li>
		<li><a href="legume.php">Légumes</a></li>
		<li><a href="fruit.php">Fruits</a></li>
		<li><a href="panier.php">Panier</a></li>
		<?php
		if(isset($_SESSION['id'])){
			echo "<li><a href='pannelAdmin.php'>Admin</a></li>";
			echo "<li><a href='deconnexion.php'>Déconnexion</a></li>";
		}
		?>
	</ul>
	<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
</nav>
<div class="clearfix"> </div>