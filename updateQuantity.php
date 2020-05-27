
<?php
session_start();
$signe = $_REQUEST['signe'];
$indexToChange = $_REQUEST['indexToChange'];


if (isset($_SESSION['panier'])) {
  if ($signe == '-'){
    $_SESSION['panier'][$indexToChange][1] -= 1;
  }
  if ($signe == 'plus'){
    $_SESSION['panier'][$indexToChange][1] += 1;
  }
  echo $_SESSION['panier'][$indexToChange][1];
}
?>
