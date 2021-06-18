<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
<br>
<h2 class="style" style="font-size: 2em;">Check Notes By Category</h2><br>
<form action="Engineers_vid.php" method="POST">
<select style="height:30px;" name="category">
<option value="">Select</option>
<option value="ele">Electrical Engineering</option>
<option value="how">How It Works</option>
<option value="mech">Mechanical Engineering</option>
</select>
<!--<input type="text" name="subject" placeholder="Subject" style="height:23px;" >-->
<input type="submit" value="Check" style="height:30px; width:70px;">
</form>

	<div class="ser-main">
    
    
    
    <?php
if(isset($_POST['category']))
{
?>
		<br>
		<h2 class="style"><?php
		$cat=$_POST['category'];
		 if($cat=='ele')
		 {
			echo "Electrical Enginering";	 
		 }else if($cat=='how')
		  {
			echo "How it Works";	 
		 }else if($cat=='mech')
		 {
		 echo "Mechanical Engineering";	
		 }
		  ?></h2>
		<div class="ser-para">
			
		</div>
       
      <?php
		require "includes/connection.php";
		
		$cat=$_POST['category'];
		$stmt = $db->prepare("SELECT * FROM videos WHERE category='$cat'");
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		?>
			
		 <div class="ser-grid-list img_style">
       
        
			<div class="gallery">
             	<a href="notes_download.php?id=<?php echo base64_encode($row['ID']); ?>"><img src="images/PDF/pdfIcon.png" style="height:150px; width:250px; border-radius:2px;" title="image-name"></a>
                 </div>
				
			<p class="para"> <center> <span style="word-wrap:break-word"><?php echo $row['title']; ?></span></center></p>
			<div class="button1">
			
        <br>
         
       
			
		
			</div>
            
		</div>
        
          <?php } ?>
          
         
		 <div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>



<?php }else { ?>

 <br>
		<h2 class="style">Electrical Enginering</h2>
		<div class="ser-para">
			
		</div>
       
      <?php
		require "includes/connection.php";
		$stmt = $db->prepare("SELECT * FROM videos WHERE ID BETWEEN '9' AND '18'");
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		?>
			
		 <div class="ser-grid-list img_style">
       
        
			<div class="gallery">
             	<a href="notes_download.php?id=<?php echo base64_encode($row['ID']); ?>"><img src="images/PDF/pdfIcon.png" style="height:150px; width:250px; border-radius:2px;" title="image-name"></a>
                 </div>
				
			<p class="para"> <center> <?php echo substr($row['title'],0,24)."..";  ?></center></p>
			<div class="button1">
			
        <br>
		</div>
            
		</div>
        
          <?php } ?>
          
         
		 <div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<div class="wrap">

<div class="main">

	<div class="ser-main">
    
		<h2 class="style">How It Works</h2>
		<div class="ser-para">
			
		</div>
       
      <?php
		require "includes/connection.php";
		$stmt = $db->prepare("SELECT * FROM videos WHERE ID BETWEEN '19' AND '24'");
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		?>
			
		 <div class="ser-grid-list img_style">
       
        
			<div class="gallery">
             	<a href="notes_download.php?id=<?php echo base64_encode($row['ID']); ?>"><img src="images/PDF/pdfIcon.png" style="height:150px; width:250px; border-radius:2px;" title="image-name"></a>
                 </div>
				
			<p class="para">  <center> <?php echo substr($row['title'],0,24).".."; ?></center></p>
			<div class="button1">
			
        <br>
         
       
			
		
			</div>
            
		</div>
        
          <?php } ?>
          
         
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>



<div class="wrap">

<div class="main">

	<div class="ser-main">
    
		<h2 class="style">Mechanical Engineering</h2>
       
		<div class="ser-para">
			
		</div>
       
      <?php
		require "includes/connection.php";
		$stmt = $db->prepare("SELECT * FROM videos WHERE ID BETWEEN '25' AND '38'");
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		?>
			
		 <div class="ser-grid-list img_style">
       
        
			<div class="gallery">
             	<a href="notes_download.php?id=<?php echo base64_encode($row['ID']); ?>"><img src="images/PDF/pdfIcon.png" style="height:150px; width:250px; border-radius:2px;" title="image-name"></a>
                 </div>
				
			<p class="para">  <center> <?php echo substr($row['title'],0,24).".."; ?></center></p>
			<div class="button1">
			
        <br>
         
       
			
		
			</div>
            
		</div>
        
          <?php }} ?>
          
         <div class="clear"></div>
		
		</div>
		<div class="clear"></div>
	</div>
</div>

<!-- start footer  -->
<?php require "includes/footer.php"; ?>
</div>
</body>
</html>