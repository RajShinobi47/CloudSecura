<!DOCTYPE HTML>
<html>
<head>
    <title>Engineer's Hub | Home</title>
	
     <link rel="stylesheet" href="css/popup.css" media="all">
   


<script type="text/javascript">
//Image Hover
jQuery(document).ready(function(){
jQuery(function() {
	jQuery('ul.da-thumbs > li').hoverdir();
});
});
</script>
<!-- Add fancyBox main JS and CSS files -->

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

</head>
<body>

<!-- start slider -->
  


  




 		<a href="#x" class="overlay" id="login_form"></a>
        <div class="popup">
           <a class="close" href="#close"></a>
             <h2>Welcome Guest!</h2>
            <p>Shoot us your query, We're listening!</p>
            <script language="javascript">
        var flag=0;
        function username()
        {
            user=loginform.username.value;
            if(user>8)
            {
                document.getElementById("error0").innerHTML="Enter UserID";
                flag=1;
            }
        }   
       

        function check(form)
        {
            flag=0;
            username();
           
            if(flag==1)
                return false;
            else
                return true;
        }

    </script>
           <form name="loginform" action="Login" method="post" class="form-signin" onSubmit="return check(this)">



                    <div id="error0"></div>
                    <input type="text" id="inputEmail" name="username" placeholder="UserID" onBlur="username()">
               controls">
                   
                    <button type="submit" class="btn">Sign in</button>
                </div>
            </div>
        </form>
            
        </div>

            


<a href="#login_form" id="login_pop"> <img src="images/live_support.jpg" style="border-radius:8px;" />zdfxc </a>   





</body>
</html>
				