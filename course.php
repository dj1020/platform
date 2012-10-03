<?php require 'lib.php'; 
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
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/formly.js"></script>
	<link rel="stylesheet" href="css/formly.css" type="text/css" />
	<script>

	$(document).ready(function() { 
	
		$('#course').formly({'onBlur':false, 'theme':'Light'},function(e) {
			$.post("course_select_action.php", $("#course").serialize());
			alert('Success!');
			//location.href='profile.php';
	});
});

</script>
</head>
<body>
   <div>
	<h1>Course Explorer</h1>
   </div>
<?php="hello!!".$member->name?>
<hr>

<div class="main-content">
<form id="course" width="800px" title="View Courses">
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
	<?php foreach($result as $course): ?>   
	<div class="course-info">
	<div class="course-image">
		<img src="/coursera/images/course/<?php=$course->image?>">
	</div>
	<div class="course-name">
	<a href="/course/saas" class="internal-home"><?php=$course->name?></a>	
	<h4 class="course-instructor"><?php=$course->instructor?></h4>
	<a href="/berkeley" class="school-icon"> <img src="/coursera/images/course/berkeley.ico"><span><?php=$course->school?></span></a>
	</div>
	<div class="course-listing-meta">
		<span><?php=$course->start_date?><br>  <?php=$course->duration?> weeks long</span>
	</div>	
	<form action="course_select_action.php" method="post">
	<input name="course_ID" type="hidden" value="<?php=$course->course_ID?>">
	<input type="submit" value="Sign Up">
	</form>
	</div><hr><!--end of course-info-->
	<?php endforeach; ?>
   </div><!--end of course-list-->
</form>
<input type="button" value="Back to Homepage" onclick="javascript:window.location.href='index.php'">
</div> <!--end of main-content-->
</body>
</html>
