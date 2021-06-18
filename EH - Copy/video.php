<?php
session_start();
?>
<?php 
if(!isset($_GET['id']))
{
echo "<script>window.location='Engineers_vid.php';</script>";
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>
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
							
			<div class="blog_list">
           
             <?php
		require "includes/connection.php";
		$data=$_GET['id'];
		function data_filter($data)
			{
			$data = trim($data);
			if(get_magic_quotes_gpc())
		    {
			 $data = stripslashes($data);
  			}
   			$data = mysql_real_escape_string($data);
    		return $data;
			}
		 $id=base64_decode(data_filter($data));
		 
		$stmt = $db->prepare("SELECT * FROM videos WHERE id=?");
		$stmt->execute(array($id));
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		?><center>
				<h2 class="style"> <?php
				$title1=$row['title'];
				 $title=wordwrap($title1,15);
				  echo $title; ?></h2>
				
				<div class="blog_para">
					<p class="para"><a href="#small-dialog">
                    <center>
                  <?php
				  $vid=$row['links'];
				  echo "<span>".$vid."</span>";
				   ?> </center>
                    </a></p>
                   
                    
					<div class="read_more1">
						</center>
					</div>
                    <?php } ?>
                    
					<div class="clear"></div>
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