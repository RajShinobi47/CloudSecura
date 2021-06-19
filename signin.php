<?php
session_start();
if(isset($_SESSION['name']))
{
}
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Secure cloud storage system  
</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

	<link href="css/signstyle.css" rel="stylesheet" type="text/css" />
	<link href="/signin.css" rel="stylesheet" type="text/css" />
	<link href="/style.css" rel="stylesheet" type="text/css" />
	<style>@import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=RocknRoll+One&display=swap');
		   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
	</style>

</head>
<!-- <body style="background-image:url(images/background.gif);"> -->
<body>

	<div class="navbar navbar-fixed-top" style="position: absolute;background: transparent;">
	
		<!-- <div class="navbar-inner"> -->
	
			<div class="container">
	
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
	
				<a href="/Project/Home Page/index.html" class="brand" style="font-family: 'Orbitron', sans-serif;">
					<h3 class="neon_heading"  data_text="CloudSecura"> CloudSecura</h3>
				</a>

				<div class="signupBox">
				<a class="link" href="registerusers.php" style="float:right;">
					<div class="input-div one" style="float:right;padding-top:15px;">
						<div class="i">
				<h3 style="font-size:20px;color:#2196f3;font-family:'calibri';"><i class="fas fa-user"> Sign Up</i></h3>
						</div>
					
					<!-- <div class="signupBox"><h3 class="signup"><i class="fas fa-user">Sign Up</i></h3></div> -->
				</a>
				</div>
				<div class="nav-collapse">
					<ul class="nav pull-right">
	
						<li class="">
							<a href="signup.html" class="">
							</a>
						</li>
						<li class="">
							<a href="signin.php" class="">
	
	
							</a>
	
						</li>
					</ul>
	
				</div>
				<!--/.nav-collapse -->
	
			</div> <!-- /container -->
		 <!--</div> /navbar-inner -->
	</div> <!-- /navbar -->

<!--<img src="/images/cloud.png" height= 125 width = 280>-->
  <div class="wrapper">
    <div class="static-txt">It's</div>
    <ul class="dynamic-txts">
      <li><span>Secure</span></li>
      <li><span>Safe</span></li>
      <li><span>Trustable</span></li>
      <li><span>Faster</span></li>
    </ul>


<?php
// include '../Project/includes/DB_Functions.php';
require 'includes/DB_Functions.php';
 
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
echo "<script>window.location='folder.php?id=keys';</script>";

}
else
{
echo "<script>alert('Sorry You Have Enter Incorrect Email & Password');</script>"; 
}
}                    
?>


	<div class="blackbox"></div>
	


<div class="account-container">
	
	<div class="content clearfix">
		
		<form action="signin.php" method="POST">
		
			<h1 style="color: #2196f3;">Member Login</h1>		
			
			<div class="login-fields">
				
				<p style="color: #2196f3;">Please provide your details</p>
				
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					
				</span>
				<a class="neon" href="#">
            		<span></span>
            		<span></span>
            		<span></span>
           			<span></span>
					   	<input type="submit" value="LOGIN" class="loginbtn">
            		<!-- Login -->
					<!-- <input type="submit" value=" Log in " class="neon_btn"> -->
        		</a>				
				 
			</div> <!-- .actions -->			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->



<div class="login-extra">
	
</div> <!-- /login-extra -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

</html>
