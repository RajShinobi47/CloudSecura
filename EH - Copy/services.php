<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
		<head>
		<title>The Retina Website Template | Blog :: w3layouts</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
		<!--nav-->
		<script src="js/jquery.min.js"></script>
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
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		</head>
		<body>
        <?php require "includes/menu.php"; ?>
        <!-- start mian -->
        <div class="main_bg">
          <div class="wrap">
            <div class="main">
              <div class="blog"> 
                <!-- start popup -->
                
                <!-- end popup -->
                <div class="blog_list">
                 <a href="#eng" class="btn btn_s">Engineering Graduates</a>&nbsp;
                  <a href="#poly" class="btn btn_s">Polytechnic Students</a>&nbsp;
                  <a href="#noneng" class="btn btn_s">Non Engineering Graduates</a>&nbsp;
                  <a href="#primary" class="btn btn_s">For Primary & Secondary school students</a>&nbsp;<br><br><hr>
                 <a name="eng"> <h2 class="style">Engineering Graduates</h2></a>
                  <br>
                 
                                    <h5>1. Academic Instituition</h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;">
                    <a href="#small-dialog"><img src="images/aca.jpg" alt=""></a>All subjects of Engineering with rigorous and dedicated practical sessions to improve technical expertise & ability to implement Engineering knowledge in industry.</p>
                    <div class="clear"></div>
                  </div>
                  <h5>2. Soft skills</a></h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/soft_skills.jpg" alt=""></a>Special soft skills batches to improve overall personality of the student to nurture their humanity & to make hem stand as a global leaders of tomorrow.</p>
                    <div class="clear"></div>
                  </div>
                   <h5>3. Aptitude training</a></h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/apti.png" alt=""></a>
                   Aptitude training to develop analytical skills which will help them getting their jobs & to improve management skills..</p>
                    <div class="clear"></div>
                  </div>
                   <h5>4. CRT (Campus recruitment training)</h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/aca.jpg" alt=""></a>
                    Camps recruitment training is a program which constitutes of a sort of soft skills & aptitude training. This program is precisely to give job orientation to students.</p>
                    <div class="clear"></div>
                  </div>
                   <h5>5. Languages</a></h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/languages.jpg" alt=""></a>
                    English Language learning speaking and corporate English to improve communication skills and presentability, confidence.
					<br>French & German language basic courses which help students to expose themselves to different countries.</p>
                    <div class="clear"></div>
                  </div> <h5>6. Competitive Exam</a></h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/aca.jpg" alt=""></a>
                    Preparation for GATE, CAT, MBA-CET to encourage students for their higher studies.</p>
                    <div class="clear"></div>
                  </div>
                    <h5>7. Projects</h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/Engineering-construction-wallpaper2.jpg" alt=""></a>
                    Guidance for Engineering projects of students where they will learn to implement their Engineering skills & concrete their technical skills.</p>
                    <div class="clear"></div>
                  </div>
                    <h5>8. Computer Languages</h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/images.jpg" alt=""></a>
                   Preparation for C, C++,Java to make students fit for technical interviews in IT sectors</p>
                    <div class="clear"></div>
                  </div>
                    <h5>9. Workshop</h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/aca.jpg" alt=""></a>
                   Certified courses of Embedded system, Arduino & many microcontroller based workshops to add to students profile.
                   <br>
                   Free counselling sessions from industry experts to guide students in proper way to reach ones ambition.
                   </p>
                    <div class="clear"></div>
                  </div>
                </div>
               <hr>
               
               
                  <div class="blog_list">
                 <a name="poly"> <h2 class="style" id="#poly">Polytechnic Students</h2></a>
                  <br>
                  <h5>1. Academic Instituition</a></h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/aca.jpg" alt=""></a>All subjects of Engineering with rigorous and dedicated practical sessions to improve technical expertise & ability to implement Engineering knowledge in industry.</p>
                    <div class="clear"></div>
                  </div>
                  <h5>2. Soft skills</a></h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/soft_skills.jpg" alt=""></a>Special soft skills batches to improve overall personality of the student to nurture their humanity & to make hem stand as a global leaders of tomorrow.</p>
                    <div class="clear"></div>
                  </div>
                   
                   <h5>3. Languages</a></h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/languages.jpg" alt=""></a>
                    English Language learning speaking and corporate English to improve communication skills and presentability, confidence.
					<br>French & German language basic courses which help students to expose themselves to different countries.</p>
                    <div class="clear"></div>
                  </div> 
                    <h5>4. Projects</h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/Engineering-construction-wallpaper2.jpg" alt=""></a>
                    Guidance for Engineering projects of students where they will learn to implement their Engineering skills & concrete their technical skills.</p>
                    <div class="clear"></div>
                  </div>
                    
                    <h5>5. Workshop</h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/aca.jpg" alt=""></a>
                   Certified courses of Embedded system, Arduino & many microcontroller based workshops to add to students profile.
                   <br>
                   Free counselling sessions from industry experts to guide students in proper way to reach ones ambition.
                   </p>
                    <div class="clear"></div>
                  </div>
                </div>
               <hr>
               
               
               
                 <div class="blog_list">
                <a name="noneng">  <h2 class="style" id="#noneng">Non Engineering Graduates</h2></a>
                  <br>
                 
                  <h5>1. Soft skills</a></h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/soft_skills.jpg" alt=""></a>Special soft skills batches to improve overall personality of the student to nurture their humanity & to make hem stand as a global leaders of tomorrow.</p>
                    <div class="clear"></div>
                  </div>
                   <h5>2. Aptitude training</a></h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/apti.png" alt=""></a>
                   Aptitude training to develop analytical skills which will help them getting their jobs & to improve management skills..</p>
                    <div class="clear"></div>
                  </div>
                   <h5>3. CRT (Campus recruitment training)</h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/aca.jpg" alt=""></a>
                    Camps recruitment training is a program which constitutes of a sort of soft skills & aptitude training. This program is precisely to give job orientation to students.</p>
                    <div class="clear"></div>
                  </div>
                   <h5>4. Languages</a></h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/languages.jpg" alt=""></a>
                    English Language learning speaking and corporate English to improve communication skills and presentability, confidence.
					<br>French & German language basic courses which help students to expose themselves to different countries.</p>
                    <div class="clear"></div>
                  </div> <h5>5. Competitive Exam</a></h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/aca.jpg" alt=""></a>
                    Preparation for GATE, CAT, MBA-CET to encourage students for their higher studies.</p>
                    <div class="clear"></div>
                  </div>
                    <h5>6. Projects</h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/Engineering-construction-wallpaper2.jpg" alt=""></a>
                    Guidance for Engineering projects of students where they will learn to implement their Engineering skills & concrete their technical skills.</p>
                    <div class="clear"></div>
                  </div>
                    <h5>7. Computer Languages</h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/images.jpg" alt=""></a>
                   Preparation for C, C++,Java to make students fit for technical interviews in IT sectors</p>
                    <div class="clear"></div>
                  </div>
                    <h5>8. Workshop</h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/aca.jpg" alt=""></a>
                   Certified courses of Embedded system, Arduino & many microcontroller based workshops to add to students profile.
                   <br>
                   Free counselling sessions from industry experts to guide students in proper way to reach ones ambition.
                   </p>
                    <div class="clear"></div>
                  </div>
                </div>
               <hr>
               
                      <div class="blog_list">
                <a name="primary">  <h2 class="style" id="#primary">For Primary & Secondary school students</h2></a>
                  <br>
                 
                  <h5>1. Subject Tutions</a></h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/business class for kids.jpg" alt=""></a>
                   All subjects of 7th, 8th, 9th, & 10th for State Board, CBSE, ICSE students.</p>
                    <div class="clear"></div>
                  </div>
                   <h5>2. Aptitude training</a></h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/circle-school-kids.png" alt=""></a>
                  IIT-JEE & AIPMT foundation course to orient students towards Engineering & Medical science</p>
                    <div class="clear"></div>
                  </div>
                   <h5>3. Practical Knowledge</h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/business class for kids.jpg" alt=""></a>
                 Special practical batches to improve curiosity & technical expertise of kids.</p>
                    <div class="clear"></div>
                  </div>
                 <h5>4. Soft skills</a></h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/soft_skills.jpg" alt=""></a>Special soft skills batches to improve overall personality of the student to nurture their humanity & to make hem stand as a global leaders of tomorrow.</p>
                    <div class="clear"></div>
                  </div>
                  <h5>5. Languages</a></h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/languages.jpg" alt=""></a>
                    English Language learning speaking and corporate English to improve communication skills and presentability, confidence.
					<br>French & German language basic courses which help students to expose themselves to different countries.</p>
                    <div class="clear"></div>
                  </div>
                    <h5>6. Projects</h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/Engineering-construction-wallpaper2.jpg" alt=""></a>
                    Guidance for Engineering projects of students where they will learn to implement their Engineering skills & concrete their technical skills.</p>
                    <div class="clear"></div>
                  </div>
                   <h5>7. Free counselling</h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/aca.jpg" alt=""></a>
                  Free counselling sessions from industry experts to guide students in proper way to reach ones ambition.
                   </p>
                    <div class="clear"></div>
                  </div>
                    <h5>8. Workshop</h5>
                  <div class="blog_para">
                    <p class="para" style="font-size:20px;"><a href="#small-dialog"><img src="images/aca.jpg" alt=""></a>
                   Certified courses of Embedded system, Arduino & many microcontroller based workshops to add to students profile.
                   <br>
                   Free counselling sessions from industry experts to guide students in proper way to reach ones ambition.
                   </p>
                    <div class="clear"></div>
                  </div>
                </div>
               
               
              </div>
            </div>
          </div>
        </div>
        <!-- start footer  -->
        <?php require "includes/footer.php"; ?>
</body>
</html>