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
<title>Engineer's Hub Admin</title>
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
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html"> <img src="assets/img/logo.png" alt="" /> </a> </div>
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
        <h1 class="page-header">Product Upload</h1>
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
if(isset($_POST['name']) && isset($_POST['brand']) && isset($_POST['price']) && isset($_POST['desc']) && isset($_POST['category']) && isset($_FILES['diagram']['name']) && isset($_FILES['file1']['name']) && isset($_FILES['file2']['name']) && isset($_FILES['file3']['name']) && isset($_FILES['file4']['name']))
{
$name=mysql_real_escape_string($_POST['name']);
$brand=mysql_real_escape_string($_POST['brand']);
$price=mysql_real_escape_string($_POST['price']);
$description=mysql_real_escape_string($_POST['desc']);
$category=mysql_real_escape_string($_POST['category']);
$diagram=$_FILES['diagram']['name'];
$image1=$_FILES['file1']['name'];
$image2=$_FILES['file2']['name'];
$image3=$_FILES['file3']['name'];
$image4=$_FILES['file4']['name'];
if(Product_Upload($name,$brand,$price,$description,$diagram,$image1,$image2,$image3,$image4,$category)==1)
{
echo "<script>window.location='upload_product.php?id=done';</script>";
}
echo "<script>window.location='upload_product.php?id=notdone';</script>";
}
?>
       
               <form action="upload_product.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Complete Product Name</label>
                    <input class="form-control" name="name" required>
                  </div>
                  <div class="form-group">
                    <label>Brand</label>
                    <input class="form-control" placeholder="Enter text" name="brand" value="Engineers' Hub" required>
                  </div>
                   <div class="form-group">
                    <label>Price</label>
                    <input class="form-control" type="number" placeholder="Enter Price" name="price" value="Engineers' Hub" required>
                  </div>
                   <div class="form-group">
                     <label>Complete Product Decsription</label>
                     <textarea required class="form-control" rows="3" name="desc"></textarea>
                     </div>
                      <div class="form-group">
                   <label>Category</label>
                 <select class="form-control" name="category">
                  <option>Select</option>
                   <option value="ARM">ARM Cortex</option>
                   <option value="Communication">Communication</option>
                    <option value="Core">Core Electrical</option>
                    <option value="Electrical">Electrical</option>
                    <option value="Embedded">Embedded</option>
                   <option value="General">General Electronics</option>
                   </select>
                  </div>
					 <div class="form-group">
                    <label>Diagram</label>
                    <input type="file" name="diagram" required>
                  </div>
                   <div class="form-group">
                    <label>First Image </label>
                    <input type="file" name="file1" required>
                  </div>
                   <div class="form-group">
                    <label>Second Image</label>
                    <input type="file" name="file2" required>
                  </div>
                   <div class="form-group">
                    <label>Third Image</label>
                    <input type="file" name="file3" required>
                  </div>
                   <div class="form-group">
                    <label>Fourth Image</label>
                    <input type="file" name="file4" required>
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
