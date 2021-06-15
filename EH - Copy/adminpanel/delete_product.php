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
<!-- Core CSS - Include with every page -->
<link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
<link href="assets/css/style.css" rel="stylesheet" />
<link href="assets/css/main-style.css" rel="stylesheet" />

<!-- Page-Level CSS -->
<link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
  <div id="page-wrapper">
    <div class="row"> 
      <!--  page header -->
      <div class="col-lg-12">
        <h1 class="page-header">Video Delete Tables</h1>
         <?php        
		if(isset($_GET['id']))
		{
		if($_GET['id']=="done")
		{
		echo "<span style='color:red'>Video Deleted</span>";
		}
		if($_GET['id']=="notdone")
		{
		echo "<span style='color:red'>Video Not Deleted</span>";
		}										
		}        
		?>									
      </div>
      <!-- end  page header --> 
    </div>
    <div class="row">
      <div class="col-lg-6"> 
        <!--   Kitchen Sink -->
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="table-responsive">
              						<?php
									require "includes/DB_Function.php";
									if (isset($_GET['delete']))
									{ 
									$id=$_GET['delete'];
									if(delete_prod($id)==1)
									{
									echo "<script>window.location='delete_product.php?id=done';</script>";
									}
									else
									{
									echo "<script>window.location='delete_product.php?id=notdone';</script>";
									}
									}
									?>
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Product Brand</th>
                    <th>Product Price</th>
                    <th>Delete </th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
									require "includes/connection.php";
									$stmt = $db->prepare("SELECT * FROM  eh_products");
									$stmt->execute();
									while($row = $stmt->fetch(PDO::FETCH_ASSOC))
									{
									$id1=$row['ID'];	
									$id=$row['name'];
									$title=$row['brand']; 
									$image=$row['price'];
									?>
                  <tr>
                    <td><?php echo substr($id,0,30).".."; ?></td>
                    <td><?php echo substr($title,0,30).".."; ?></td>
                    <td><?php echo substr($image,0,100).".." ?></td>
                    <td><a href="?delete=<?php echo $id1; ?>" type="button" class="btn btn-danger">Delete</a></td>
                  </tr>
                </tbody>
                <?php } ?>
              </table>
            </div>
          </div>
        </div>
        <!-- End  Kitchen Sink --> 
      </div>
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
<!-- Page-Level Plugin Scripts--> 
<script src="assets/plugins/dataTables/jquery.dataTables.js"></script> 
<script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script> 
<script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
</body>
</html>