<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/formly.js"></script>
<link rel="stylesheet" href="css/formly.css" type="text/css" />
<script>

$(document).ready(function() { 
	
	$('#sign_in').formly({'theme':'Base'},function(e) {
		$.post("sign_in_check.php", $("#sign_in").serialize());
		//$.post("sometarget.php", $("#contactInfo").serialize());
		//alert('請您去指定的電子郵件信箱內點取認證信，謝謝');
		location.href='index.php';
	});
});

</script>

<div>
	<h1>Sign In.</h1>
	<p>Sign into your Coursera account with an email and a previously chosen password.</p>
</div>
<br />

<form id="sign_in" width="400px" title="Sign In.">
Email address: <input type="text" name="email" place="Email" validate="email" size="30"/><br>
Password: <input type="password" name="password" place="Password" label="Password" require="true" /><br>
<input type="submit" value="Sign In"> <a href="forget_password.php">forgot password?</a>
</form>
