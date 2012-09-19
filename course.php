<? require 'lib.php'; 
$result = XD('Course')
	->order_by('start_date ASC')
	->all();

if(is_login()):
	$member = XD('Member')->find($_SESSION['email']);
endif;
?>
<!DOCTYPE HTML>
<html>
<head>
	<?php head('Course');?>
</head>
<body>
   <div>
	<h1>Course Explorer</h1>
   </div>
<?="hello!!".$member->name?>
<hr>

<div class="main-content">
   <div>
<select name="category">
<option>Mandarin
<option>Mathematics
<option>Science
<option>Mathematics
<option>English
<option>Sociology
<option>Geography
</select>
<select name="grade">
<option>Elementary(1-6)
<option>Junior(7-9)
<option>Senior(10-12)
</select>
Search:<input type=text name=search value="" size=8 maxlength=8>
   </div>
   <div class="course-list"> 
	<? foreach($result as $course): ?>   
	<div class="course-info">
	<div class="course-image">
		<img src="/coursera/images/course/<?=$course->image?>">
	</div>
	<div class="course-name">
	<a href="/course/saas" class="internal-home"><?=$course->name?></a>	
	<h4 class="course-instructor"><?=$course->instructor?></h4>
	<a href="/berkeley" class="school-icon"> <img src="/coursera/images/course/berkeley.ico"><span><?=$course->school?></span></a>
	</div>
	<div class="course-listing-meta">
		<span><?=$course->start_date?><br>  <?=$course->duration?> weeks long</span>
	</div>	
	<form action="course_select_action" method="post">
	<input name="course_ID" type="hidden" value="<?=$course->course_ID?>">
	<input type="submit" value="Sign Up">
	</form>
	</div><hr><!--end of course-info-->
	<? endforeach; ?>
   </div><!--end of course-list-->
</div> <!--end of main-content-->
</body>
</html>
