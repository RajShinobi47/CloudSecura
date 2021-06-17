<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
        <img src="images/Engg. Hub PNG.png" />
			<a href="index.php"><img src="images/logo4.png" alt="" /></a>
            
		</div>		
	<div class="cssmenu">
		<ul style="margin-top:17px;">
		   <li class="active"><a href="index1.php">Home</a></li>
		   <li><a href="about.php">About EH</a></li>
		    
		         <li><a href="Engineers_vid.php">EH Videos</a></li>
                  <li><a href="notes.php">EH Notes</a></li>
		         <li><a href="product/index.php" target="_blank">EH Products</a></li>
		  	 </li>
            <li><a href="services.php">Services</a></li>
		   <li><a href="contact.php">Contact EH</a></li>|
<?php
if(isset($_SESSION['name'])){
$name=$_SESSION['name'];
$db = new PDO('mysql:host=localhost;dbname=eh;charset=utf8', 'root', '');
$stmt = $db->prepare("SELECT * FROM users WHERE email='$name'");
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
 echo "<span style='color:#febd17'>Welcome</span> <span style='color:#FF0000'>&nbsp;".substr($row['username'],0,24)."!!</span>";
}
	
	
	
	 ?>

<li><a href="logout.php" style="color:#febd17">Logout</a></li>
<?php
}else{
?>
                       
                       <li><a href="login.php" style="color:#ffdd00">Login</a></li>
					   <li class="last"><a href="signup.php" style="color:#ffdd00">Signup</a></li>
			<?php } ?>
		 <div class="clear"></div>
		 </ul>
	</div>
		<div class="clear"></div>
		<div class="top-nav">
		<nav class="clearfix">
				<ul>
					   <li><a href="index1.php">Home</a></li>
					   <li><a href="about.php">About EH</a></li>
                       <li><a href="Engineers_vid.php">EH Videos</a></li>
                       <li><a href="Engineers_prod.php">EH Product</a></li>
                      <li><a href="blog.php">Services</a></li>
					   <li><a href="contact.php">Contact EH</a></li>
					  <?php
                      if(isset($_SESSION['name']))
					 { ?>
						 <li><a href="logout.php" style="color:#febd17">Logout</a></li>
						 <?php
					}else{
					   ?>
                       <li><a href="login.php" style="color:#febd17">Login</a></li>
					   <li class="last"><a href="signup.php" style="color:#febd17">Signup</a></li>
				<?php } ?>
				</ul>
                
				<a href="#" id="pull">Menu</a>
			</nav>
            
		</div>
        <div class="social-icons" style="margin-right:5px;">
			     <ul>
			       <a href="https://www.facebook.com/engineershub1" target="_blank"> <li><img src="images/fb1.png" /></li></a>
			        <a href="https://twitter.com/engineershub61" target="_blank"><li><img src="images/twit.png"/></li></a>
                     <a href="https://twitter.com/engineershub61" target="_blank"> <li><img src="images/g+.png" ></li></a>
                     <a href="https://twitter.com/engineershub61" target="_blank"> <li><img src="images/in.png"/></li></a>
                     <a href="http://www.pinterest.com/engineershub/" target="_blank">  <li><img src="images/pint.png"/></li></a>
                      
			       
				</ul>
			</div>
	<div class="clear"></div>
	</div>
</div>
</div>