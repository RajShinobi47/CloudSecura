<?php
session_start();
?>
<?php
require "includes/DB_Functions.php";
if(isset($_POST['email']))
{
$email=strip_tags($_POST['email']);
if(NewsLetter($email)==1)
{
echo "<script>alert('Thank You For Joining our Newsletter')</script>";
}
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Engineer's Hub | Home</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
	<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <script src="js/fwslider.js"></script>

<script type="text/javascript" src="js/jquery-hover-effect.js"></script>
<script type="text/javascript">
//Image Hover
jQuery(document).ready(function(){
jQuery(function() {
	jQuery('ul.da-thumbs > li').hoverdir();
});
});
</script>
<!-- Add fancyBox main JS and CSS files -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
<!--nav-->
<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
</script>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
<?php require "includes/menu.php"; ?>
<!-- start slider -->
    <div id="fwslider">
        <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
                    <img src="images/slider2.jpg">
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title"> engineering is science </h4>
                        <!-- /Text title -->
                        
                        <!-- Text description -->
                        <p class="description">“One man’s “magic” is another man’s engineering. “Supernatural” is a null word.” &nbsp;― Robert A. Heinlein
                        </p>
                        <!-- /Text description -->
                    </div>
                </div>
                 <!-- /Texts container -->
            </div>
            
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="images/slider3.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">engineering is Innovation</h4>
                        <p class="description">"Engineers are behind the cars we drive, the pills we pop and the way we power our homes."&nbsp; ― James Dyson</p>
                    </div>
                </div>
            </div>
             <div class="slide">
                <img src="images/slider1.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">engineering is Future</h4>
                        <p class="description">Normal people... believe that if it ain't broke, don't fix it. Engineers believe that if it
                        ain't broke, it doesn't have enough features yet.</p>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
    <!--/slider -->
<!-- start mian -->
<div class="main_bg">
<div class="wrap">
	<div class="grids_1_of_3">
		<div class="grid_1_of_3 images_1_of_3">
			<a href="services.php"> <img src="images/icon1.png" alt="" /></a>
			 <a href="services.php"><h3>services</h3></a>
	
		</div>
		<div class="grid_1_of_3 images_1_of_3">
			<a href="product/index.php" target="_blank"><img src="images/icon2.png" alt="" /></a>
			<a href="product/index.php" target="_blank"><h3>EH Product</h3></a>
			
		</div>
		<div class="grid_1_of_3 images_1_of_3">
			<a href="contact.php"><img src="images/icon3.png" alt="" /></a>
			<a href="contact.php"><h3>get in touch</h3></a>
		
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<!-- start top_grid -->
<div class="top_grid_bg">
<div class="wrap">
	<div class="top_grid">
		<div class="top_grid_text">
			<h2>Recent Projects</h2>
		</div>
		<div class="top_grid_btn">
			<a class="btn" href="index.php"> Browse all</a>
		</div>
		<div class="clear"></div>
		<div class="top_grid_gallery">
			<div class="image_grid portfolio_4col top_grid_portfoli">
				<ul style="" id="list" class="portfolio_list da-thumbs">
					<li>
						<img src="images/gallery1.jpg" alt="img">
						<article class="da-animate da-slideFromLeft" style="display: block;">
							<h3>A Sample Portfolio</h3>
							<span class="link_post"><a class="popup-with-zoom-anim" href="#small-dialog"></a></span>
							<span class="zoom"><a class="popup-with-zoom-anim" href="#small-dialog1"></a></span>
							 <div id="small-dialog1" class="mfp-hide">
								<div class="pop_up">
								 	<h2>A Sample Portfolio</h2>
									<img src="images/gallery1_zoom.jpg" alt=""/>
					  			</div>
							</div>
						</article>
					</li>
				</ul>
			</div>
			<div class="image_grid portfolio_4col top_grid_portfoli">
				<ul style="" id="list" class="portfolio_list da-thumbs">
					<li>
						<img src="images/gallery1.jpg" alt="img">
						<article class="da-animate da-slideFromLeft" style="display: block;">
							<h3>A Sample Portfolio</h3>
							<span class="link_post"><a class="popup-with-zoom-anim" href="#small-dialog"></a></span>
							<span class="zoom"><a class="popup-with-zoom-anim" href="#small-dialog1"></a></span>
						</article>
					</li>
				</ul>
			</div>
			<div class="image_grid portfolio_4col top_grid_portfoli">
				<ul style="" id="list" class="portfolio_list da-thumbs">
					<li>
						<img src="images/gallery3.jpg" alt="img">
						<article class="da-animate da-slideFromLeft" style="display: block;">
							<h3>A Sample Portfolio</h3>
							<span class="link_post"><a class="popup-with-zoom-anim" href="#small-dialog"></a></span>
							<span class="zoom"><a class="popup-with-zoom-anim" href="#small-dialog1"></a></span>
						</article>
					</li>
				</ul>
			</div>
			<div class="image_grid portfolio_4col ">
				<ul style="" id="list" class="portfolio_list da-thumbs">
					<li>
						<img src="images/gallery4.jpg" alt="img">
						<article class="da-animate da-slideFromLeft" style="display: block;">
							<h3>A Sample Portfolio</h3>
							<span class="link_post"><a class="popup-with-zoom-anim" href="#small-dialog"></a></span>
							<span class="zoom"><a class="popup-with-zoom-anim" href="#small-dialog1"></a></span>
						</article>
					</li>
				</ul>
			</div>
		
		
		</div>
		<div class="clear"></div>	
</div>
</div>
<!-- start mid_grid -->

<!-- start mid_grid -->
</div>
<!-- start testimonial  -->

<!-- start testimonial  -->

<!-- start testimonial  -->
<div class="btm_grid_bg">
<div class="wrap">
	<div class="btm_grid">
		<h2 style="color:black;">latest news</h2>
		<div class="span_of_3">
			<div class="span1_of_3">
				<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fengineershub1&amp;width&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:400px;" allowTransparency="true"></iframe>
			</div>
			<div class="span1_of_3" >
				<a class="twitter-timeline" width="300"  href="https://twitter.com/EngineersHub61" data-widget-id="492139946052829184">Tweets by @EngineersHub61</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
			<div class="span1_of_3">
				<!-- start feedwind code --><script type="text/javascript" src="//feed.mikle.com/js/rssmikle.js"></script><script type="text/javascript">(function() {var params = {rssmikle_url: "http://www.electronics-eetimes.com/en/Learning-center/white-papers-full.html?action=get_rss",rssmikle_frame_width: "300",rssmikle_frame_height: "400",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",scrollbar: "off",autoscroll: "on",scrolldirection: "up",scrollstep: "9",mcspeed: "20",sort: "New",rssmikle_title: "on",rssmikle_title_sentence: "Latest Techinical News",rssmikle_title_link: "",rssmikle_title_bgcolor: "#0066FF",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#0066FF",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",item_link: "off",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M:%S %p",rssmikle_item_description_tag: "off",rssmikle_item_description_image_scaling: "off",article_num: "15",rssmikle_item_podcast: "off",keyword_inc: "",keyword_exc: ""};feedwind_show_widget_iframe(params);})();</script><div style="font-size:10px; text-align:center; width:300;"><a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a><!--Please display the above link in your web page according to Terms of Service.--></div><!-- end feedwind code -->
</body>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>

<!-- start footer_top  -->
<div class="footer_top_bg">
<div class="wrap">
	<div class="footer_top">
		<h2>" Unless You Don't Learn, You Can't Grow "</h2>
	</div>
</div>
</div>
<!-- start footer  -->
<?php require "includes/footer.php"; ?>
</body>
</html>
				