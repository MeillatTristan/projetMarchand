<!DOCTYPE HTML>
<html>

<head>
  <title>Daisy Website Template | Home :: w3layouts</title>
  <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <!-- Custom Theme files -->
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <!-- Custom Theme files -->
  <!---- start-smoth-scrolling---->
  <script type="text/javascript" src="js/move-top.js"></script>
  <script type="text/javascript" src="js/easing.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event) {
        event.preventDefault();
        $('html,body').animate({
          scrollTop: $(this.hash).offset().top
        }, 1500);
      });
    });
  </script>
  <!---- start-smoth-scrolling---->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  </script>
  <!----start-top-nav-script---->
  <script>
    $(function() {
      var pull = $('#pull');
      menu = $('nav ul');
      menuHeight = menu.height();
      $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
      });
      $(window).resize(function() {
        var w = $(window).width();
        if (w > 320 && menu.is(':hidden')) {
          menu.removeAttr('style');
        }
      });
    });
  </script>
  <!----//End-top-nav-script---->

</head>

<body>
  <?php
  session_start();
  ?>
  <?php
  include "header.php";
  include "configbdd.php";
  ?>
  <div class="container">
    <h2>Inscription</h2>
    <h5>Inscrivez-vous ici</h5>
  </div>
  <div>
    <form class="inscription" action='valid_user.php'>
      <div class="first_contenant">
        <span>Prénom :</span>
        <input type="text" name='firstname' id='firstname' required placeholder='Prénom' autofocus=""> </input>
        <span>Adresse :</span>
        <input type="text" name='adresse' id='adresse' required placeholder='Adresse'> </input>
        <span>Numéros de Téléphone Fixe :</span>
        <input type="text" name='telephone' id='telephone_f' placeholder=''> </input>
        <span>Mot de passe :</span>
        <input type="password" name='valid_mdp1' id='password_1' required placeholder='************'> </input>
      </div>
      <div class="first_contenant">
        <span>Nom :</span>
        <input type="text" name='lastname' id='lastname' required placeholder='Nom'> </input>
        <span>Code Postal :</span>
        <input type="text" name='code_postal' id='code_postal' required placeholder='Code Postal'> </input>
        <span>Numéros de Télephone :</span>
        <input type="text" name='telephone' id='telephone_p' required placeholder='+33'> </input>
        <span>Confirmation de mot de passe :</span>
        <input type="password" name='valid_mdp2' id='password_2' required placeholder='************'> </input>
        <div class="contenant_button">
          <button class="button_inscription" type='submit' name='valid_user'>Valider</button>
        </div>
      </div>
      <div class="first_contenant">
        <span>Adresse Email :</span>
        <input type="text" name='email' id='email' required placeholder='Email'> </input>
        <span>Ville :</span>
        <input type="text" name='ville' id='ville' required placeholder='Ville'> </input>
      </div>
    </form>
  </div>