<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register User</title>
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
			
				<form action="register.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-logo">
						<!-- <i class="zmdi zmdi-landscape"></i> -->
						<img src="images/icons/cloud.ico" width="160px" height = "90px" alt="">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Register
					</span>
					
					<div class="wrap-input100 validate-input" >
						<input class="input100" required id="firstname" type="text" name="Staff_Name" placeholder="First Name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" required id="firstname" type="text" name="Staff_Surname" placeholder="Last Name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" required id="Staff_Email" type="text" name="Staff_Email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#x2709;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" required id="password" type="password" name="Staff_Password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
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
						<input class="login100-form-btn" type="submit" value="Submit" class="loginbtn">
					</div>

				</form>
				<br>
					<div class="registerBtn" style="border-radius:15px;text-align:center; font-size:20px;
					
					background: #9152f8;
					background: -webkit-linear-gradient(bottom,#7579ff,#5f0088);
					background: -o-linear-gradient(bottom, #7579ff,#5f0088 );
					background: -moz-linear-gradient(bottom, #7579ff,#5f0088);
					background: linear-gradient(bottom, #7579ff,#5f0088);
					position: relative;
					z-index: 1;

					-webkit-transition: all 0.4s;
					-o-transition: all 0.4s;
					-moz-transition: all 0.4s;
					transition: all 0.4s;">


					<a href="index.php"><button style="font-size: 20px;color:#fff;">
						Login
					</button>
					</a>
					<!-- <input class="login100-form-btn" type="submit" value="LOGIN" class="loginbtn"> -->
				</div>
				
			</div>
		</div>
	</div>
	
	<?php
		
		// include '/Project/includes/DB_Functions.php';
		// require '../Project/includes/DB_Functions.php';
		// include 'includes/DB_Functions.php';

		// require_once $_SERVER['DOCUMENT_ROOT'].'/common/configs/config_templates.inc.php';
		$root = $_SERVER['DOCUMENT_ROOT'];
		//config..
		// require_once($root . 'C:\xampp\htdocs\Project\includes\DB_Functions.php');
		require '../includes/DB_Functions.php';
		
		require "../includes/connection.php";


		if(isset($_POST['Staff_Name'])){
		$Staff_Name=$_POST['Staff_Name'];
		$Staff_Surname=$_POST['Staff_Surname'];
		$Staffjoining="";
		$Staff_Email=$_POST['Staff_Email'];
		$Staff_Password=$_POST['Staff_Password'];

		$Staff_Email=$_POST['Staff_Email'];
		$Staff_Password=$_POST['Staff_Password'];
		function rand_code($len)
		{
		$min_lenght= 0;
		$max_lenght = 100;
		$bigL = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$smallL = "abcdefghijklmnopqrstuvwxyz";
		$number = "0123456789";
		$bigB = str_shuffle($bigL);
		$smallS = str_shuffle($smallL);
		$numberS = str_shuffle($number);
		$subA = substr($bigB,0,5);
		$subB = substr($bigB,6,5);
		$subC = substr($bigB,10,5);
		$subD = substr($smallS,0,5);
		$subE = substr($smallS,6,5);
		$subF = substr($smallS,10,5);
		$subG = substr($numberS,0,5);
		$subH = substr($numberS,6,5);
		$subI = substr($numberS,10,5);
		$RandCode1 = str_shuffle($subA.$subD.$subB.$subF.$subC.$subE);
		$RandCode2 = str_shuffle($RandCode1);
		$RandCode = $RandCode1.$RandCode2;
		if ($len>$min_lenght && $len<$max_lenght)
		{
		$CodeEX = substr($RandCode,0,$len);
		}
		else
		{
		$CodeEX = $RandCode;
		}
		return $CodeEX;
		}
		$private=rand_code(8);
		$public=rand_code(8);
		if(Register($Staff_Name,$Staff_Surname,$Staffjoining,$Staff_Email,$Staff_Password,$private,$public)==1)
		{
		$stmt = $db->prepare("SELECT * FROM register_staff order by ID DESC LIMIT 1");
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$id=$row['ID'];
		}
		echo "<script>alert('User Registered Succesfully!!');window.location.href='index.php'</script>";
		}
		else
		{
		echo "<script>alert('User is Already Register!!');window.location.href='index.php'</script>";
		}

		}

		?>

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