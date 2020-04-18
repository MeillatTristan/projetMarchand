<div class="containerAdmin">
<?php
include "header.php";
include "configbdd.php";
?>

<style type="text/css">
.bg {
  background : #fff
}

</style>

			<!---- header-info ---->
			<div class="header-info text-center">
				<div class="container">
					<h2>Connexion Admin</h2>
        </div>
        <form action="authUser.php">
          <input type="text" name="identifiant" required placeholder="identifiant">
          <input type="password" name="password" required placeholder="Mot de Passe">
          <input type="submit" value="Connexion">
        </form>
			</div>
			</div>
			<!---- header-info ---->
			<!--- about-us ---->
			<div id="about" class="about">
				<div class="container">
					<div class="about-head text-center">
            <span>A propos<span> de moi</span></span>
            <p>Daisy is sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum</p>
					</div>
</div>
				

	</body>
</html>