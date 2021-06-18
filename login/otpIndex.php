<!-- index.php -->
<!-- <!DOCTYPE html>
<html>
<header>
<title>HTML Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//studentstutorial.com/div/d.css">
<header>
<body>
<div class="w3-row">
<div class="w3-half w3-card-2 w3-round">
<div class="w3-container w3-center w3-green">
<h2>Sign In</h2>
</div>
<br>
<form class="w3-container" method="post" action="process.php">
<label class="w3-label w3-text-black"><b>Name</b></label>
<p><input class="w3-input w3-border w3-round" type="text" placeholder="name" name="name" required></p>
<label class="w3-label w3-text-black"><b>Email</b></label>
<p><input class="w3-input w3-border w3-round" type="text" placeholder="email" name="email"></p>
<label class="w3-label w3-text-black"><b>Phone</b></label>
<p><input class="w3-input w3-border w3-round" type="text" placeholder="phone" name="phone"></p>
<p class="w3-center"><button class="w3-btn w3-green w3-round" style="width:100%;height:40px" name="btn-save">Submit</button></p>
</form>
<div class="w3-container w3-center w3-light-grey">
<h4>Students Tutorial</h4>
</div>
</div>
<div class="w3-half">
</div>
</div>
</body>
</html -->







<?php
session_start();

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
			
				<form action="process.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-logo">
						<!-- <i class="zmdi zmdi-landscape"></i> -->
						<img src="images/icons/cloud.ico" width="170px" height = "100px" alt="">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						OTP Verification
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter Name">
						<input class="input100" id="username" type="text" name="name" placeholder="name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Email">
						<input class="input100" id="password" type="text" name="email" placeholder="email">
						<span class="focus-input100" data-placeholder="&#x2709;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Phoneno">
						<input class="input100" id="password" type="text" name="phone" placeholder="phone">
						<span class="focus-input100" data-placeholder="&#128222;"></span>
					</div>

					<!-- <div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div> -->

					<div class="container-login100-form-btn">
						<!-- <button class="login100-form-btn">
							Login
						</button> -->
						<input class="login100-form-btn" type="submit" name="btn-save" value="Generate OTP" class="loginbtn">
					</div>

				</form>
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