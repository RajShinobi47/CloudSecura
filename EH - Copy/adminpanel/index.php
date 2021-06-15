<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engineer's Hub Admin</title>
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="assets/img/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
    <?php
	if(isset($_POST['name'])&& isset($_POST['password']))
	{
    $name=trim(htmlentities($_POST['name']));
	$password=trim(htmlentities($_POST['password']));
	if($name=="sandeshharkut" && $password=="engineershub2014")
	{
	$_SESSION['name']=$name;
	header("location:upload_videos.php");
	}
	else
	{
	header("location:index.php");
	}

	}
    ?>
                       <form name="frm" method="POST" action="index.php">
                            <fieldset>
                                <div class="form-group">
    <input class="form-control" placeholder="User Name" name="name" type="text" autocomplete="off" required autofocus>
                                </div>
                                <div class="form-group">
     <input class="form-control" placeholder="Password" name="password" autocomplete="off" required type="password" value="">
                                </div>
                              <br>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
