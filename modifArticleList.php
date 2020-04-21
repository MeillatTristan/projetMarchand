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
                <th>Provenance</th>
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

                if ($articles['venteBool'] == 'y') {
                  $vente = 'Oui';
                } elseif ($articles['venteBool'] == 'n') {
                  $vente = 'Non';
                }
                // echo "<td>" . $articles['name'] . "</td>";
                echo "<td>" . "<form action='modifArticle.php'>" . "<input  size='30' type='text' name='name' value='" . $articles['name'] ." ' >" . "</td>";
                echo "<td>" . "<select name='type' id='type'  required placeholder='Type de l\'article'> <option value='l'>Légume</option> <option value='f'>Fruit</option> </select>" . "</td>";
                echo "<td>" . "<input size='10' type='text' name='quantity' value='" . $articles['quantity'] . " ' >" . "</td>";
                echo "<td>" . "<input size='10' type='text' name='prix' value='" . $articles['prix'] . " ' >" . "</td>";
                echo "<td>" . "<input size='35' type='text' name='provenance' value='" . $articles['provenance'] . " ' >" . "</td>";
                echo "<td>" . "<select name='VenteBool' id='vente'  required placeholder='En vente'> <option value='y'>Oui</option> <option value='n'>Non</option> </select>" . "</td>";
                echo "<td><img src='images/".$articles['picture'] ."' alt='photo de l'article'></td>" . "</form>" ;
                echo "<td>" . "<button type='submit' name='modifyBook'>Modifier</button>" . "</td>" ;
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