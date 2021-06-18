<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>The Retina Website Template | Contact :: w3layouts</title>
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
</head>
<body>
<?php require "includes/menu.php"; ?>
<!-- start mian -->
<div class="main_bg">
<div class="wrap">
<div class="main">


	 	 <div class="contact">				
					<div class="contact_info">
						<h2 class="style">get in touch</h2>
			    	 		<div class="map">
                            <iframe  width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.3938927748964!2d77.77140991250808!3d20.936691235414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd6a49e13015997%3A0x3451635b96e9c4dd!2sAshirwad+Appartment%2C+Maltekdi%2C+Amravati%2C+Maharashtra+444603%2C+India!5e0!3m2!1sen!2s!4v1406183340660" width="600" height="450" frameborder="0" style="border:0"></iframe>
            <br><small></small>
					   		</div>
      				</div>
				  <div class="contact-form">
			 	 <div class="content">
                 <div class="contact_info">
						<h2 class="style">Address</h2>
			    	 		<div class="map">
                            	
					   			<div class="grids_1_of_3" >
		<div class="grid_1_of_3 images_1_of_3" style="font-size:16px;">
			
			<h3 style="margin-top:-12px;">Corporate Office</h3>
			 		<ul>-: Corporate Office :-	</ul>
			 <p> B-4, 'Aashirwad', Appartment, <br>
              Keshao Colony, Camp, Amravati
              </p>
              <br>
             -: Centre :-
               <p>'Vasant Bhuvan', Beside Gurudwara,<br>
              Buty Plot, Rajapeth, Amravati
              </p>
              
		</div>
		<div class="grid_1_of_3 images_1_of_3"  style="font-size:16px;">
			
			<h3 style="margin-top:-12px;">Website & Email</h3>
			<ul>-: Website :-	</ul>
            <p>www.engineershub.co.in<br></p><br>
            <p>
            <ul>-: Email :-	</ul>
             contact@engineershub.co.in<br>
             info@engineershub.co.in
             <br>
              </p>
            
		</div>
		<div class="grid_1_of_3 images_1_of_3"  style="font-size:16px;">
			
			<h3 style="margin-top:-12px;">Contact</h3>
			<p> -: Contact Number :-<br>
           +917507172661 <br>+919730076442 <br> +918149715356
            
           
            
            </p>
		</div>
		<div class="clear"></div>
	</div>
					   		</div>
      				</div>
                    
                    
                    
                    
                    
                    
                    
                <?php
function spamcheck($field) {
  // Sanitize e-mail address
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
    return TRUE;
  } else {
    return FALSE;
  }
}
?>

<?php
// display form if user has not clicked submit
  // the user has submitted the form
  // Check if the "from" input field is filled out
  if (isset($_POST["from"])) {
    // Check if "from" email address is valid
    $mailcheck = spamcheck($_POST["from"]);
    if ($mailcheck==FALSE) {
      echo "Invalid input";
    } else {
      $from = $_POST["from"]; // sender
      $subject = $_POST["subject"];
      $message = $_POST["message"];
	  $message .= "Name: ".$_POST['userName']."\n";
	  $message .= "Email: ".$_POST['userEmail']."\n";
	  $message .= "Contact: ".$_POST['userPhone']."\n";
	  $message .= "Message: ".$_POST['userMsg']."\n";
		
	  // message lines should not exceed 70 characters (PHP rule), so wrap it
      $message = wordwrap($message, 70);
      // send mail
      mail("contact@engineershub.co.in",$subject,$message,"From: $from\n");
	  echo "<script>alert('Thank You!! We will get back to you shortly');</script>";
      echo "<script>window.location.reload();</script>";
	  
     
    }
  }

?>    
  	<h2 class="style">Contact Us</h2>
		 	 </div>
					    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                         <input type="hidden" name="from" value="demo@engineershub.co.in">
   						<input type="hidden" name="subject" value="demo message">
   						 <input type="hidden" name="message">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" class="" value="Submit us"></span>
						  </div>
					    </form>
				    </div>
  				<div class="clear"> </div>		
			  </div>
		</div>
</div>
</div>
<!-- start footer  -->
<?php require "includes/footer.php"; ?>
</body>
</html>