<script src="js/sidebar.js"></script>
<?php
		include "configbdd.php";
		if (isset($_SESSION['id'])) {
			$idUser = $_SESSION['id'];
			$user = $bdd->query("SELECT * FROM users WHERE id = $idUser")->fetch();
			$initial = $user['firstname'][0] . $user['lastname'][0];
			$name = ucfirst($user['firstname']) . " " . ucfirst($user['lastname']);
?>

<div id="sidebar">
	<div class="toggleBtn" onclick="show()">
		<img src="images/nav-icon.png" alt="menu icone">
		<span>menu</span>
	</div>

	<div class="profilRecap">
		<div class="initial">
			<h2><?php echo strtoupper($initial) ?></h2>
		</div>
		<p class='name'><?php echo $name ?></p>
		<p><?php echo $user['email'] ?></p>

	</div>

	<ul>
		<li>
			<img src="images/commandes.png" alt="icone Commandes">
			<a href="commandes.php">Commandes</a>
		</li>
		<li>
			<img src="images/profil.png" alt="icone Profil">
			<a href="profil.php">Profil</a>
		</li>
		<?php
			$admin = $bdd->query("SELECT admin FROM users WHERE id=$idUser")->fetch()[0];
			if ($admin == "y"){
				?>
				<li>
					<img src="images/user-crown.png" alt="icone Gestion">
					<a href="pannelAdmin.php">Gestion</a>
				</li>
		<?php
			}
		?>
	</ul>
</div>


<?php
		}
?>

