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

	<style>
            
            /*.welcome-text {
                position: absolute;
                width: 600px;
                height: 300px;
                margin: 20% 30%;
                text-align: center; 
            }*/
            .welcome-text h1 {
                text-align: center;
                color: rgb(73, 228, 26);
                text-transform: uppercase;
                font-size: 30px;
            }
            .welcome-text h1 span {
                color: #e79110;
            }
            .welcome-text a {
                border: 1px solid #fff;
                padding: 10px 25px;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 14px;
                margin-top: 20px;
                display: inline-block;
                color: #fff;
            }
            .welcome-text a:hover {
                background: #fff;
                color: #333;
            }

			.wlc-text
			{
				float:left;
				padding-left:20px;
				overflow:hidden;
			    transform: translate(-300px,-250px);
			}

        </style>





</head>
<body>

		<?php
		
		// include '/Project/includes/DB_Functions.php';
		// require '../Project/includes/DB_Functions.php';
		// include 'includes/DB_Functions.php';

		// require_once $_SERVER['DOCUMENT_ROOT'].'/common/configs/config_templates.inc.php';
		$root = $_SERVER['DOCUMENT_ROOT'];
		//config..
		// require_once($root . 'C:\xampp\htdocs\Project\includes\DB_Functions.php');
		require '../includes/DB_Functions.php';
		
		if(isset($_POST['username']) && isset($_POST['password'])){
		$name=strip_tags($_POST['username']);
		$password=strip_tags($_POST['password']); 
		$stmt = $db->prepare("SELECT * FROM register_user WHERE Staff_Email='$name' AND Staff_Password='$password'");
		$stmt->execute();
		if($stmt->rowCount()==1)
		{
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$idss=$row['ID'];$user_private_key=$row['user_private_key'];$user_public_key=$row['user_public_key'];	
		$name=$row['Staff_Name']." ".$row['Staff_Surname'];
		}
		$_SESSION['name']=$name;$_SESSION['userid']=$idss;

		$_SESSION['user_private_key']=$user_private_key;
		$_SESSION['user_public_key']=$user_public_key;


		$session_id=$_SESSION['session_id']=rand(1111,3333);
		$private_key=$_SESSION['private_key']=rand(4444,7777);
		$public_key=$_SESSION['public_key']=rand(8888,9999);



		$stmt3 = $db->prepare("INSERT INTO `key_generation_session`(`session_id`, `public_key`, `private_key`) VALUES ('$session_id','$public_key','$private_key')");
		$stmt3->execute();
		echo "<script>window.location='../Login/otpindex.php';</script>";

		}
		else
		{
		echo "<script>alert('Sorry You Have Enter Incorrect Email & Password');</script>"; 
		}
		}                    
		?>
	
		
	<div class="limiter">
	<a class="wlc-text" href="../Template/index.php">
                    <!-- <img  src="assets/img/cloud.png" alt="..." /> -->
        
		<div class="container-login100" style="background-image: url('images/bg.jpg');">
			
			<div class="wrap-login100">
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


					<a href="register.php"><button style="font-size: 20px;color:#fff;">
						Register
					</button>
					</a>
					<!-- <input class="login100-form-btn" type="submit" value="LOGIN" class="loginbtn"> -->
				</div>
				<br/>
				<form action="index.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-logo">
						<!-- <i class="zmdi zmdi-landscape"></i> -->
						<img src="images/icons/cloud.ico" width="170px" height = "100px" alt="">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" id="username" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" id="password" type="password" name="password" placeholder="Password">
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
						<input class="login100-form-btn" type="submit" value="LOGIN" class="loginbtn">
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