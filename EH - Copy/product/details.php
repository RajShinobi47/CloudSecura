<?php 
if(!isset($_GET['id']))
{
echo "<script>window.location='index.php';</script>";
}
?>
<!DOCTYPE HTML>
<html>
	<head>
	<title>Product Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.min.js"></script>
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
	<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/megamenu.js"></script>
	<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
	<!-- end menu -->
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
	<!----details-product-slider--->
	<!-- Include the Etalage files -->
	<link rel="stylesheet" href="css/etalage.css">
	<script src="js/jquery.etalage.min.js"></script>
	<!-- Include the Etalage files -->
	<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
	<!----//details-product-slider--->
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
	<body>
<?php
		require "includes/category.php";
		?>
        </div>
    <div class="cont span_2_of_3">
          <div class="labout span_1_of_a1"> 
        <!-- start product_slider -->
        
        <?php
		require "includes/connection.php";
		
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
		 
		$stmt = $db->prepare("SELECT * FROM eh_products where ID=?");
		$stmt->execute(array($id));
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		?>
        <ul id="etalage">
              <li> <a href="optionallink.html"> <img class="etalage_thumb_image" src="images/products/<?php echo $row['image1']; ?>" /> <img class="etalage_source_image" src="images/products/<?php echo $row['image1']; ?>" /> </a> </li>
              <li> <img class="etalage_thumb_image" src="images/products/<?php echo $row['image2']; ?>" /> <img class="etalage_source_image" src="images/products/<?php echo $row['image2']; ?>" /> </li>
              <li> <img class="etalage_thumb_image" src="images/products/<?php echo $row['image3']; ?>" /> <img class="etalage_source_image" src="images/products/<?php echo $row['image3']; ?>" /> </li>
              <li> <img class="etalage_thumb_image" src="images/products/<?php echo $row['image4']; ?>" /> <img class="etalage_source_image" src="images/products/<?php echo $row['image4']; ?>" /> </li>
            </ul>
        
        <!-- end product_slider --> 
      </div>
          <div class="cont1 span_2_of_a1">
        <h3 class="m_3"> <?php echo $row['name']; ?></h3>
        <div class="price_single"> <span class="actual" style="color:#F00;">RS:<?php echo $row['price']; ?></span> </div>
        <div class="cont1 span_2_of_a1">
              <h4 class="m_3" style="color:#00F;">This Product is Available at Engineers' Hub,<br>
            Please Find below 
            contact details to order this product. </h4>
              <h4> <br>
            Email: contact@engineershub.co.in <br>
            Contact: +9198988988998 </h4>
            </div>
      </div>
          <div class="clear"></div>
          <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script> 
          <script type="text/javascript" src="js/jquery.flexisel.js"></script>
          <div class="toogle">
        <h3 class="m_3">Product Details</h3>
        <p class="m_text"> <?php echo $row['description']; ?></p>
      </div>
          <div class="toogle">
        <h3 class="m_3">Product Diagram</h3>
        <p class="m_text"> <img src="images/products/<?php echo $row['diagram']; ?>"></p>
      </div>
        </div>
    <?php } ?>
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