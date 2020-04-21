<!DOCTYPE HTML>
<html>

<head>
  <title>Daisy Website Template | Home :: w3layouts</title>
  <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <!-- Custom Theme files -->
  <link href="css/style.css" rel='stylesheet' type='text/css' />

  <!---- start-smoth-scrolling---->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!----//End-top-nav-script---->

</head>

<body>
  <?php
  session_start();
  ?>
  <div class="containerAdminAll">
    <?php include "sidebarAdmin.php" ?>
    <?php
    include "configbdd.php";
    if (!isset($_SESSION['id'])) {
      header("Location : index.php");
    }
    ?>
    <div class="containerAdmin">
      <?php include "header.php" ?>
      <style type="text/css">
        .bg {
          background: #eceef2
        }
      </style>

      <!---- header-info ---->
      <div class="header-info text-center">
        <?php
        $requete = $bdd->query('SELECT * FROM articles');
        ?>
        <h3>Utilisateurs :</h3>
        <div style='overflow-x:auto;'>
          <table>
            <thead>
              <tr>
                <th>Nom de l'article</th>
                <th>Fruit/Légume</th>
                <th>Quantité</th>
                <th>Prix</th>
                <th>Provenace</th>
                <th>En vente</th>
                <th>Photo</th>
                <th>Modifier</th>
              </tr>
            </thead>
            <tbody class='tableau'>
              <?php


              while ($articles = $requete->fetch()) {
                echo "<tr>";
                if ($articles['type'] == 'f') {
                  $type = 'Fruit';
                } elseif ($articles['type'] == 'l') {
                  $type = 'Légume';
                }

                if ($articles['ventebool'] == 'y') {
                  $vente = 'Oui';
                } elseif ($articles['ventebool'] == 'n') {
                  $vente = 'Non';
                }
                echo "<td>" . $articles['name'] . "</td>";
                echo "<td>" . $articles['prix'] . "</td>";
                echo "<td>" . $articles['provenance'] . "</td>";
                echo "<td>" . $articles['quantity'] . "</td>";
                echo "<td>" . $vente . "</td>";
                // echo "<td><a href='profil.php?idMaj=".$articles[' id']."'>Modifier</a></td>" ;
                echo "</tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>

</body>

</html>