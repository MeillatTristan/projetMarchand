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
<div class="containerAdmin">
  <?php include "sidebarAdmin.php" ?>

  <!---- header-info ---->
  <div class="header-info text-center">
    <div class="container">
      <h2>Modification des identifiants</h2>
      <?php
      if( isset($_REQUEST['pass']) && $_REQUEST['pass'] == 'f'){
        echo "<p class='falsePass'>les mots de passes sont différents</p>";
      }
      elseif(isset($_REQUEST['pass']) && $_REQUEST['pass'] == 'y'){
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
  </div>
</div>

	</body>
</html>