<?php
require 'lib.php'; 
if(is_login()):
	$member = XD('Member')->find($_SESSION['email']);
	//echo "hello!!".$member->name;
else:
	Error::PageBack_and_Alert( "Please Sign in!" );
endif;
$table = XD('Selection_table')->find_by_email($_SESSION['email']);
$course = XD('Course')->find($table->course_ID);
?>
<!DOCTYPE HTML>
<html>
<head>
	<?php head('Profile');?>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/formly.js"></script>
	<link rel="stylesheet" href="css/formly.css" type="text/css" />
	<script>

	$(document).ready(function() { 
	
		$('#profile').formly({'theme':'Dark'},function(e) {
			$.post("profile_action.php", $("#profile").serialize());
			alert('Success!');
			//location.href='profile.php';
	});
});

</script>
</head>
<body>
   <div>
	<h1></h1>
	<p></p>
   </div>
<br>
   <div>
   <form id="profile" width="800px" title="My Profile">
    <li>Privacy 
	<select name="privacy" style="font-size:12px; line-height: 14px" class="coursera-profile-editor-privacy">
	<? for($privacy=1;$privacy<4;$privacy++):
		echo"<option value=\"$privacy\"";
		if($privacy==$member->privacy)
			echo "SELECTED >";
		else
			echo ">";
		($privacy==1)?print("Only me.</option>"):(($privacy==2)?print("The Coursera community.</option>"):print("Everyone on the web.</option>"));	
	endfor;
	?>
	</select>
    <li>Location <input name="location" type="test" size="25" maxlength="25" value="<?=$member->location?>"/></li> 
    <li>Gender 
	<? for($gender=1;$gender<4;$gender++):
		echo"<input type=\"radio\" name=\"gender\" value=\"$gender\"";
		if($gender==$member->gender)
			echo "CHECKED >";
		else
			echo ">";
		($gender==1)?print(" Female "):(($gender==2)?print(" Male "):print(" I'd rather not say "));
	   endfor;
	?>
    </li> 
    <li>Birthday 
	<select name="birth_month" >
	<?
	$month = array('Month','January','February','March','April','May','June','July','August','September','October','November','December');
	
	for($i=0;$i<13;$i++):
		($i==$member->birth_month)?$select=" SELECTED":$select="";
  		print("<option value=".$i.$select.">".$month[$i]."</option>");
	endfor; 
	?>
  	</select>

	<select name="birth_day">
  	<option value="0">Day</option>
	<?  
	for($i=1;$i<32;$i++):
		($i==$member->birth_day)?$select=" SELECTED":$select="";
  		print("<option value=".$i.$select.">".$i."</option>");
	endfor; ?>
	</select>

	<select name="birth_year">
  	<option value="0">Year</option>
	<?  
	for($i=2012;$i>1900;$i--):
		($i==$member->birth_year)?$select=" SELECTED":$select="";
  		print("<option value=".$i.$select.">".$i."</option>");
	endfor; ?>
	</select>
	Feel free to leave out your date or year.	
    </li>
    <li>About Me <textarea name="about_me" cols="20"><?=$member->about_me?></textarea></li> 
<li>Websites
<img src="https://dt5zaw6a98blc.cloudfront.net/static/images/icons/website_24_bw.png">
<input name="website" type="text" value="<?=$member->website?>" style="width:290px"></li>
<li>
<img src="https://dt5zaw6a98blc.cloudfront.net/static/images/icons/linkedin_24_bw.png">http://linkedin.com/
<input name="linkedin" type="text" value="<?=$member->linkedin?>">
<a title="How to find your LinkedIn URL" href="http://help.linkedin.com/app/answers/detail/a_id/87" target="_blank" class="btn btn-small">?</a>
</li>
<li>
<img src="https://dt5zaw6a98blc.cloudfront.net/static/images/icons/facebook_24_bw.png">http://facebook.com/<input name="facebook" type="text" value="<?=$member->facebook?>"><a title="How to find your Facebook URL" href="http://www.facebook.com/help/?faq=200712339971750#How-do-I-customize-my-timeline-or-Page-address?-Where-can-I-claim-a-username?" target="_blank" class="btn btn-small">?</a>
</li>
<li>
<img src="https://dt5zaw6a98blc.cloudfront.net/static/images/icons/googleplus_24_bw.png">
http://plus.google.com/
<input name="gplus" type="text" value="<?=$member->gplus?>">
</li>
<li>
<img src="https://dt5zaw6a98blc.cloudfront.net/static/images/icons/twitter_24_bw.png">http://twitter.com/
<input name="twitter" type="text" value="<?=$member->twitter?>">
</li>
<li><img src="https://dt5zaw6a98blc.cloudfront.net/static/images/icons/github_24_bw.png">http://github.com/
<input name="github" type="text" value="<?=$member->github?>">
</li>
    
<li>My Courses</li>
<? foreach($table as $item): 
   $course = XD('Course')->find($item->course_ID);
?>
<li><img src="/coursera/images/course/<?=$course->image?>"><?=$course->name?></li>
<? endforeach; ?>

     <input type="submit" value="Saved!"> <input type="button" value="Back to Homepage" onclick="javascript:window.location.href='index.php'">

        </form>
  </div>   


</body>
</html>
