<<<<<<< HEAD
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/formly.js"></script>
<link rel="stylesheet" href="css/formly.css" type="text/css" />
<script>

$(document).ready(function() { 
	
	$('#sign_up').formly({'theme':'Base'},function(e) {
		$.post("sign_up_action.php", $("#sign_up").serialize());
		//$.post("sometarget.php", $("#contactInfo").serialize());
		alert('請您去指定的電子郵件信箱內點取認證信，謝謝');
		location.href='index.php';
	});
});

</script>

<div>
	<h1>Sign Up.</h1>
	<p>With a Coursera account you can enroll in multiple courses and keep track of them all in one place.</p>
</div>

<form id="sign_up" width="400px" title="Sign Up.">
Full name: <input type="text" name="name" place="Full Name" label="Full Name" require="true" size="30"/><br>
Email address: <input type="text" name="email" place="Email" validate="email" size="30" /><br>
Password: <input type="password" name="password" place="Password" label="Password" require="true" /><br>
<input type="checkbox" name="agree" require="true" label="Terms" value="agree" />I agree to the <a href="term_of_service.php" target="tab1">Terms of Service</a> and <a href="honor_code.php" target="tab1" >Honor Code</a><br>
<input type="submit" value="Sign up" />
</form>

<div>
	<p>Already Have an Account?</p>
	<p>If you already have a password, please <a href="sign_in">Sign in</a>.</p>
  </div>
=======
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/formly.js"></script>
<link rel="stylesheet" href="css/formly.css" type="text/css" />
<script>

$(document).ready(function() { 
	
	$('#sign_up').formly({'theme':'Base'},function(e) {
		$.post("sign_up_action.php", $("#sign_up").serialize());
		//$.post("sometarget.php", $("#contactInfo").serialize());
		alert('請您去指定的電子郵件信箱內點取認證信，謝謝');
		location.href='index.php';
	});
});

</script>

<div>
	<h1>Sign Up.</h1>
	<p>With a Coursera account you can enroll in multiple courses and keep track of them all in one place.</p>
</div>
<br />

<form id="sign_up" width="400px" title="Sign Up.">
Full name: <input type="text" name="name" place="Full Name" label="Full Name" require="true" size="30"/><br>
Email address: <input type="text" name="email" place="Email" validate="email" size="30" /><br>
Password: <input type="password" name="password" place="Password" label="Password" require="true" /><br>
<input type="checkbox" name="agree" require="true" label="Terms" value="agree" />I agree to the <a href="term_of_service.php" target="tab1">Terms of Service</a> and <a href="honor_code.php" target="tab1" >Honor Code</a><br>
<input type="submit" value="Sign up" />
</form>

>>>>>>> f54285bae726325054fdb2e8aae1950517928c9c
