<<<<<<< HEAD
<? require 'lib.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDUx Platform</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/index.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.min.js"></script>
</head>
<body>
<!-- wrap start -->
<div class="wrap">
	<!-- header start -->
	<div class="header">
		<div class="logo"><a href=""><img src="images/comingsoon.png" alt="Logo" /></a></div>
		<!-- top_menu start -->
        <ul class="top_menu_l1">
			<li id="course_menu"><a href="course.php">Courses</a>
            	<ul class="top_menu_l2">
            		<li id="elementary_menu">Elementary Students
                    	<ul class="top_menu_l3">
                    		<li>Chinese</li>
                    		<li>English</li>
                    		<li>Math</li>
                    		<li>Science</li>
                    		<li>Sociology</li>
                    	</ul>
                    </li>
            		<li id="junior_menu">Junior Students
						<ul class="top_menu_l3">
                    		<li>j Chinese</li>
                    		<li>j English</li>
                    		<li>j Math</li>
                    		<li>j Science</li>
                    		<li>j Sociology</li>
                    	</ul>
                    </li>
            		<li id="senior_menu">Senior Students
						<ul class="top_menu_l3">
                    		<li>s Chinese</li>
                    		<li>s English</li>
                    		<li>s Math</li>
                    		<li>s Science</li>
                    		<li>s Sociology</li>
                    	</ul>
                    </li>
            	</ul>
            </li>
			<li>Join us</li>
			<li id="about_menu">About
             	<ul class="top_menu_l2">
            		<li>Jobs</li>
            		<li>Team</li>
            		<li>Contact Us</li>
            		<li>About Us</li>
            	</ul>
            </li>
			<li>FAQ</li>
			<li id="login_menu"><a href="sign_in.php">Login</a>
            	<ul class="top_menu_l2">
            		<li>Course</li>
            		<li><a href="profile.php">Profile</a></li>
            		<li>Settings</li>
            		<li><a href="logout.php">Logout</a></li>
            	</ul>            
            </li>
		</ul>
        <!-- top_menu end -->
	</div>
    <!-- header End -->
    <div style="clear:both"></div>
    <!-- content Start -->
	<div class="content">
		<? if(is_login()): 
			$member = XD('Member')->find($_SESSION['email']);
			echo "hello!".$member->name;
		   endif;
		?> 
		<div class="infovideo">介紹影片</div>
		<h3>Hot 熱門/隨機課程</h3>
		<div class="news">
        	<ul class="random_class">
				<li><img src="" alt="" /><a href="#">Ex1 四則運算</a></li>
				<li><img src="" alt="" /><a href="#">Ex2 科學與生活</a></li>
				<li><img src="" alt="" /><a href="#">Ex3 音樂之父</a></li>
				<li><img src="" alt="" /><a href="#">Ex4 創意人生</a></li>
        	</ul>
        </div>
        <div style="clear:both"></div>
        
        <!-- categories start -->
		<h3>Categories 課程分類</h3>
		<div class="categories">
			<div class="categories_grade">
				<h2>Grade 依年級分(三欄)</h2>
           		<a id="view_all_course" href="">View All Courses</a>
		        <div style="clear:both"></div>
            	<span>
                	<h3>1st~6th Grade</h3>
            		<ul>
            			<li><a href=""> Mandarin 國文</a></li>
            			<li><a href=""> Math 數學</a></li>
            			<li><a href=""> English 英文</a></li>
            			<li><a href=""> Science 自然</a></li>
            			<li><a href=""> Sociology 社會</a></li>
            			<li><a href=""> Geographic 地理</a></li>
            		</ul>
            	</span>
            	<span>
                	<h3>7th~9th Grade</h3>
                </span>
            	<span>
                	<h3>10th~12th Grade</h3>
                </span>
            </div>
 			<div style="clear:both"></div>
			<div class="categories_subject">Subject 依科目分(??欄)</div>
			<div style="clear:both"></div>
		</div>
        <!-- categories end -->
	</div>
    <!-- content end -->
    <!-- footer start -->
	<div class="footer">
		<div class="nav">
			<ul>
				<li>Courses</li>
				<li>About</li>
				<li>Terms</li>
				<li>Join Us</li>
                <li>Press</li>
				<li>Contact Us</li>
                <li>Help</li>
			</ul>
		</div>
		<div class="socailmedia">Social Media links 連結</div>
	</div>
    <!-- footer end -->
</div>
<!-- wrap end -->
</body>

<script>
<!-- $(".logo").css("display","none"); -->

$("#course_menu").hover(
	function(){
//		$("#course_menu ul:first").stop().animate();
		$("#course_menu ul:first").slideDown("normal");
	}
	,
	function(){
		$("#course_menu ul:first").slideUp("normal");
	}
)

$("#about_menu").hover(
	function(){
		$("#about_menu ul:first").slideDown("normal");
	}
	,
	function(){
		$("#about_menu ul:first").slideUp("normal");
	}
)

$("#login_menu").hover(
	function(){
		$("#login_menu ul:first").slideDown("normal");
	}
	,
	function(){
		$("#login_menu ul:first").slideUp("normal");
	}
)

$("#junior_menu").hover(
	function(){
		$("#junior_menu ul:first").animate({left:"100%"},600);
	}
	,
	function(){
		$("#junior_menu ul:first").animate("normal","left");
	}
)



</script>

</html>
=======
<?php //require 'lib.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDUx Platform</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/index.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" SRC="js/jquery.min.js"></script>
<script language="JavaScript" SRC="js/index.js"></script>
</head>
<body>
<!-- wrap start -->
<div class="wrap">
	<!-- header start -->
	<div class="header">
		<div class="logo"><a href=""><img src="images/comingsoon.png" alt="Logo" /></a></div>
		<!-- top_menu start -->
        <ul class="top_menu_l1">
			<li id="course_menu"><a href="course.php">Courses</a>
            	<ul class="top_menu_l2">
            		<li>Elementary Students</li>
            		<li>Junior Students</li>
            		<li>Senior Students</li>
            	</ul>
            </li>
			<li>Join us</li>
			<li>About
             	<ul class="top_menu_l2">
            		<li>Jobs</li>
            		<li>Team</li>
            		<li>Contact Us</li>
            		<li>About Us</li>
            	</ul> 
            </li>
			<li>FAQ</li>
			<li id="login_menu">
				<a id="signin" href="#login"><?php echo (false)?'Ken':'Login';?></a>
				<?php if(false) { ?>
					<ul class="top_menu_l2">
						<li>Course</li>
						<li><a href="profile.php">Profile</a></li>
						<li>Settings</li>
						<li><a href="logout.php">Logout</a></li>
					</ul>          
				<?php } ?>
            </li>
		</ul>
        <!-- top_menu end -->
	</div>
    <!-- header End -->
    <div style="clear:both"></div>
    <!-- content Start -->
	<div class="content">
		<?php  
			// if(is_login()): 
			// $member = XD('Member')->find($_SESSION['email']);
			// echo "hello!".$member->name;
			// endif;
			
		?> 
		<div class="infovideo">介紹影片</div>
		<h3>Hot 熱門/隨機課程</h3>
		<div class="news">
        	<ul class="random_class">
				<li><img src="" alt="" /><a href="#">Ex1 四則運算</a></li>
				<li><img src="" alt="" /><a href="#">Ex2 科學與生活</a></li>
				<li><img src="" alt="" /><a href="#">Ex3 音樂之父</a></li>
				<li><img src="" alt="" /><a href="#">Ex4 創意人生</a></li>
        	</ul>
        </div>
        <div style="clear:both"></div>
        
        <!-- categories start -->
		<h3>Categories 課程分類</h3>
		<div class="categories">
			<div class="categories_grade">
				<h2>Grade 依年級分(三欄)</h2>
           		<a id="view_all_course" href="">View All Courses</a>
		        <div style="clear:both"></div>
            	<span>
                	<h3>1st~6th Grade</h3>
            		<ul>
            			<li><a href=""> Mandarin 國文</a></li>
            			<li><a href=""> Math 數學</a></li>
            			<li><a href=""> English 英文</a></li>
            			<li><a href=""> Science 自然</a></li>
            			<li><a href=""> Sociology 社會</a></li>
            			<li><a href=""> Geographic 地理</a></li>
            		</ul>
            	</span>
            	<span>
                	<h3>7th~9th Grade</h3>
                </span>
            	<span>
                	<h3>10th~12th Grade</h3>
                </span>
            </div>
 			<div style="clear:both"></div>
			<div class="categories_subject">Subject 依科目分(??欄)</div>
			<div style="clear:both"></div>
		</div>
        <!-- categories end -->
	</div>
    <!-- content end -->
    <!-- footer start -->
	<div class="footer">
		<div class="nav">
			<ul>
				<li>Courses</li>
				<li>About</li>
				<li>Terms</li>
				<li>Join Us</li>
                <li>Press</li>
				<li>Contact Us</li>
                <li>Help</li>
			</ul>
		</div>
		<div class="socailmedia">Social Media links 連結</div>
	</div>
    <!-- footer end -->
</div>
<!-- wrap end -->
<!-- Lightbox start -->
<div class="ken-lightbox-bg"></div>
<div class="ken-lightbox">
	<div class='ken-lightbox-close'></div>
	<div class="ken-lightbox-content">
		<div class='login_form'><?php require 'sign_in.php' ?></div>
		<br />
		<div class='signin_msg'>
			<p>No account yet?</p>
			<p><a class='signup'>Sign up</a> today.</p>
		</div> 
		<div class='signup_msg hide'>
			<p>Already Have an Account?</p>
			<p>If you already have a password, please <a href="sign_in.php">Sign in</a>.</p>
		</div>
	</div>
	<!-- lightbox-content end -->
</div>
<!-- Lightbox end -->

</body>



</html>
>>>>>>> f54285bae726325054fdb2e8aae1950517928c9c
