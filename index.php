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
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1500);
				});
			});
		</script>
		 <!---- start-smoth-scrolling---->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
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
		<div id="top" class="bg">
		<!----- start-header---->
			<div id="home" class="header">
					<div class="top-header">
						<div class="container">
						<!----start-top-nav---->
						<?php include "header.php" ?>
					</div>
				</div>
			</div>

			<!---- header-info ---->
			<div class="header-info text-center">
				<div class="container">
					<h1><span> </span><label>SALAH </label> PRIMEURS<span> </span></h1>
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

				<div class="map"></div>
					<script>
						function myMap() {
						var mapProp= {
							center:new google.maps.LatLng(51.508742,-0.120850),
							zoom:5,
						};
						var map = new google.maps.Map(document.getElementByClassName("map"),mapProp);
						}
					</script>

					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApqRbeCVJJ-1trZpCV94SL7WEVxbQekSg&callback=myMap"></script>

			<!---- Address ---->
			<!---- footer ---->
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
	</body>
</html>