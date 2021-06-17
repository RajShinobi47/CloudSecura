<!DOCTYPE HTML>
<html>
	<head>
	<title>Engineers Hub Products</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/jquery.easydropdown.js"></script>
	<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
	<!-- start menu -->
	
	<!-- end menu -->
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
	<!-- top scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	</head>
	<body style="font-size:20px;">
<?php
		require "includes/category.php";
		?>
          <?php
		require "includes/connection.php";
		
		 
			if(isset($_GET['cat']))
			{
			$data=$_GET['cat'];
			function data_filter($data)
			{
			$data = trim($data);
			if(get_magic_quotes_gpc())
		    {
			 $data = stripslashes($data);
  			}
   			$data = mysql_real_escape_string($data);
    		return $data;
			}
			if($data=='latest')
			{
			$stmt = $db->prepare("SELECT * FROM eh_products order by ID desc");	
			}
			else if($data=='hotsellers')
			{
			$stmt = $db->prepare("SELECT * FROM eh_products order by ID ASC");
			}
			else if($data=='hotdeals')
			{
			$stmt = $db->prepare("SELECT * FROM eh_products order by ID desc");
			}
			else
			{
			
			$stmt = $db->prepare("SELECT * FROM eh_products where category=?");
			$stmt->execute(array($data));
			
			}
			
			}
			else if(isset($_GET['id']))
			{
			$data=$_GET['id'];
			function data_filter($data)
			{
			$data = trim($data);
			if(get_magic_quotes_gpc())
		    {
			 $data = stripslashes($data);
  			}
   			$data = mysql_real_escape_string($data);
    		return $data;
			}
			$id=base64_decode(data_filter($data));
			if($data=='lth')
			{
			$stmt = $db->prepare("SELECT * FROM eh_products order by price ASC");
			$stmt->execute(array($data));
			}
			else if($data=='htl')
			{
			$stmt = $db->prepare("SELECT * FROM eh_products order by price DESC");
			$stmt->execute(array($data));
			}
			else if($id=='first')
			{
			$stmt = $db->prepare("SELECT * FROM eh_products where Price BETWEEN 0 AND 10000");
			
			}
			else if($id=='second')
			{
			$stmt = $db->prepare("SELECT * FROM eh_products where Price BETWEEN 10000 AND 15000");
			
			}
			else if($id=='third')
			{
			$stmt = $db->prepare("SELECT * FROM eh_products where Price BETWEEN 15000 AND 20000");
			
			}
			else if($id=='fourth')
			{
			$stmt = $db->prepare("SELECT * FROM eh_products where Price BETWEEN 20000 AND 25000");
			
			}
			else if($id=='five')
			{
			$stmt = $db->prepare("SELECT * FROM eh_products where Price BETWEEN 25000 AND 10000000");
			}
			}
			else if(!isset($_GET['id']) && !isset($_GET['cat']))
			{
			$stmt = $db->prepare("SELECT * FROM eh_products");
			}
			
			
			$stmt->execute();
			if ($stmt->fetchColumn() <= 0) 
			{
			echo "Sorry We have not Found Anything for you";
			}	
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			?>
          <div class="col_1_of_single1 span_1_of_single1"><a href="details.php?id=<?php echo base64_encode($row['ID']); ?>">
        <div class="view1 view-fifth1">
              <div class="top_box">
            <h3 class="m_1"> <?php echo substr($row['name'],0,22).".."; ?></h3>
            <p class="m_2"> <?php echo substr($row['brand'],0,30).".."; ?></p>
            <div class="grid_img">
                  <div class="css3"><img src="images/products/<?php echo $row['image1']; ?>" alt="" style="height:173px; width:250px"/></div>
                  <div class="mask1">
                <div class="info">Quick View</div>
              </div>
                </div>
            <div class="price">Rs:<span style="color:red;"><?php echo $row['price']; ?></span></div>
          </div>
            </div>
        <span class="rating1"> </span>
       
        <div class="clear"></div>
        </a></div>
          <?php } ?>
        </div>
    <div class="clear"></div>
  </div>
    </div>
   
<?php require "includes/footer.php"; ?>
<script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script> 
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>