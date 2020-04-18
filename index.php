<?php include "header.php" ?>

			<!---- header-info ---->
			<div class="header-info text-center">
				<div class="container">
					<h1><span> </span><label>SALAH </label> PRIMEUR<span> </span></h1>
					<p>Votre marchand</p>
				</div>
			</div>
			</div>
			<div class="clearfix"> </div>
			<!---- header-info ---->
			<!--- about-us ---->
			<div id="about" class="about">
				<div class="container">
					<div class="about-head text-center">
            <h3><span>A propos de moi</span></h3>
            <p>Daisy is sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum</p>
					</div>

			<!---- Address ---->
			<div id="contact" class="address">
				<div class="address-info text-center">
					<h3>Addresse</h3>
					<p>615 4th Ave S, Jacksonville Beach, FL 32250</p>
				</div>
				<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d177504.0179213423!2d-0.5970969089488695!3d47.51826750012542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48087127748b35f3%3A0x40d37521e0d8610!2sVillev%C3%AAque%2C%2049140%20Rives-du-Loir-en-Anjou!5e0!3m2!1sfr!2sfr!4v1587214424827!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>				</div>
			</div>
			<!---- Address ---->
			<!---- footer ---->
			<div class="footer text-center">
				<a href="#"><img src="images/footer-logo.png" title="daisy" /></a>
				<p class="copy-right">Template by <a href="http://w3layouts.com/">W3layouts</a></p>
				<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutCubic' });
										
									});
								</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			</div>
			<!---- footer ---->
			<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>

	</body>
</html>