<!DOCTYPE HTML>
<html>

<head>
  <title>Daisy Website Template | Home :: w3layouts</title>
  <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <!-- Custom Theme files -->
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <link href="css/connexion.css" rel='stylesheet' type='text/css' />

  <!---- start-smoth-scrolling---->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!----//End-top-nav-script---->

</head>

<body>

<div><form action='valid_user.php'>
  <input type="text" name='firstname' id='firstname'  required placeholder='Prénom' > </input>
  <input type="text" name='lastname' id='lastname'  required placeholder='Nom' > </input>       
  <input type="text" name='email' id='email'  required placeholder='Email' > </input> 
  <input type="text" name='adresse' id='adresse'  required placeholder='Adresse' > </input> 
  <input type="text" name='telephone' id='telephone'  required placeholder='Numéros de téléphone' > </input> 
  <input type="password" name='valid_mdp1' id='password_1'  required placeholder='Mot de passe' > </input> 
  <input type="password" name='valid_mdp2' id='password_2'  required placeholder='Confirmation de mot de passe' > </input> 
  <button type='submit' name='valid_user'>Valider</button>
</form>
</div>