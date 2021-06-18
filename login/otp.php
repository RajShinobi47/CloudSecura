<?php
session_start();
if(isset($_POST['save']))
{
$rno=$_SESSION['otp'];
$urno=$_POST['otpvalue'];
	if(strcmp($rno,$urno))
	{
		$name=$_SESSION['name'];
		$email=$_SESSION['email'];
		$phone=$_SESSION['phone'];
		//For admin if he want to know who is register
		$to="example@gmail.com";
		$subject = "Thank you!";
		$txt = "Some one show your demo Email id: ".$email." Mobile number : ".$phone."";
		$headers = "From: studentstutorial@gmail.com" . "\r\n" .
		"CC: divyasundarsahu@gmail.com";
		mail($to,$subject,$txt,$headers);
		echo "<p>Thank you for show our Demo.</p>";
		//For admin if he want to know who is register
	}
	else{
		echo "<p>Invalid OTP</p>";
	}
}
//resend OTP
if(isset($_POST['resend']))
{
$message="<p class='w3-text-green'>Sucessfully send OTP to your mail.</p>";
$rno=$_SESSION['otp'];
$to=$_SESSION['email'];
$subject = "OTP";
$txt = "OTP: ".$rno."";
$headers = "From: otp@studentstutorial.com" . "\r\n" .
"CC: divyasundarsahu@gmail.com";
mail($to,$subject,$txt,$headers);
$message="<p class='w3-text-green w3-center'><b>Sucessfully resend OTP to your mail.</b></p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<!-- <link rel="stylesheet" href"> -->
</head>
<body>
	
		
	
		
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg.jpg');">
			<div class="wrap-login100">
			
				<form action="../folder.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-logo">
						<!-- <i class="zmdi zmdi-landscape"></i> -->
						<img src="images/icons/cloud.ico" width="170px" height = "100px" alt="">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						OTP Verification
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter OTP">
						<input class="input100" id="username" type="password" name="otpvalue" placeholder="OTP">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

                    <br/>
					<div class="container-login100-form-btn">
						<!-- <button class="login100-form-btn">
							Login
						</button> -->
						<input class="login100-form-btn" type="submit" name="save" value="Submit" class="loginbtn"> 
					 </div>
                        <br/>
                     
                    <div class="container-login100-form-btn">
						<!-- <button class="login100-form-btn">
							Login
						</button> -->
						<input class="login100-form-btn" type="button" name="resend" value="Resend OTP" class="loginbtn"> 
					 </div>



				</form>
                <div><?php if(isset($message)) { echo $message; } ?></div>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>