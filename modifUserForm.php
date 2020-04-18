<div class="containerAdmin">
<?php
include "header.php";
include "configbdd.php";
if(!isset($_SESSION['id'])){
  header("Location : index.php");
}
?>

<style type="text/css">
.bg {
  background : #fff
}

</style>

			<!---- header-info ---->
			<div class="header-info text-center">
				<div class="container">
          <h2>Modification des identifiants</h2>
          <?php
          if($_REQUEST['pass'] == 'f'){
            echo "<p class='falsePass'>les mots de passes sont différents</p>";
          }
          elseif($_REQUEST['pass'] == 'y'){
            echo "<p class='goodPass'>Vos nouvelles informations ont bien été enregistré</p>";
          }
          ?>
        </div>
        <form action="modifUser.php">
          <input type="text" name="identifiant" required placeholder="identifiant">
          <input type="password" name="password" required placeholder="Mot de Passe">
          <input type="password" name="passwordConfirm" required placeholder="Confirmer votre mot de passe">
          <input type="submit" value="modifier">
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