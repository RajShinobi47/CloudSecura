<?php
session_start();
if(!isset($_SESSION['name']))
{
header("location:index.php");	
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engineer's Hub Admin </title>
    
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />



</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <?php require "includes/header.php"; ?>
            <!-- end navbar-top-links -->

       <?php require "includes/menu.php"; ?>
        <!-- end navbar side -->
        <!--  page-wrapper -->
          <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Video Upload </h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php
								require "includes/DB_Function.php";
								if(isset($_POST['name']) && isset($_POST['link']) && ($_FILES['file']['name']))
								{
                                $title=mysql_real_escape_string($_POST['name']);
								$link=mysql_real_escape_string($_POST['link']);
								$image=$_FILES['file']['name'];
								if(Video_Upload($title,$link,$image)==1)
								{
								echo "<script>window.location='upload_videos.php?id=done';</script>";
								}
								echo "<script>window.location='upload_videos.php?id=notdone';</script>";
								}
                               ?>
										<form action="upload_videos.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Video Title</label>
                                            <input class="form-control" name="name" required>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>Video Link (Youtube Iframe Link)</label>
                                            <input class="form-control" placeholder="Enter text" name="link" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>File input (should be JPG and 320*180)</label>
                                            <input type="file" name="file" required>
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary">Submit Button</button>
                                        <button type="reset" class="btn btn-success">Reset Button</button>
                                        <?php        
										if(isset($_GET['id']))
										{
										if($_GET['id']=="done")
										{
										echo "<span style='color:red'>Data Uploaded</span>";
											}
										if($_GET['id']=="notdone")
										{
										echo "<span style='color:red'>Data Not Uploaded</span>";
											}
											
										}        
										
										?>
							
										
                                    </form>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html>
