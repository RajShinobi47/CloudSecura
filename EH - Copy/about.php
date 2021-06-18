<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>About Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!--nav-->
<script src="js/jquery.min.js"></script>
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
<!-- Add fancyBox main JS and CSS files -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
</head>
<body>
<?php require "includes/menu.php"; ?>
<!-- start mian -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="blog">
						<!-- start popup -->
			 				
						<!-- end popup -->	
			<div class="blog_list">
				<h2 class="style"><strong>About Us</strong></h2>
				
				<div class="blog_para">
                <center>
               <img src="images/AboutUs.jpg">
               </center>
					<p class="para" style="font-size:20px;"><a class="popup-with-zoom-anim" ></a>Engineers’ Hub
                     is an aspiring firm inaugurated in the year 2013 which provides learning for all Engineering and 
                     Polytechnic subjects along with regular and dedicated practical sessions to impart maximum practical 
                     essence in the studies of Engineering. We provide perfect environment for students to grow in their 
                     respective area of interest.  As we aim to build the overall personality of the students to make them 
                     stand as the corporate professionals and global leaders of tomorrow we also provide rigorous soft skills
                      and personality development sessions and counselling by industry experts to shepherd their dreams. </p>
					
					<div class="clear"></div>
				</div>
			 </div>
							
			 </div>		 
			</div>
		</div>
</div>
</div>
<!-- start footer  -->
<?php require "includes/footer.php"; ?>
</body>
</html>