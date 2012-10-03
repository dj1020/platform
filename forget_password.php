<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/formly.js"></script>
<link rel="stylesheet" href="css/formly.css" type="text/css" />
<script>

$(document).ready(function() { 
	
	$('#forget').formly({'theme':'Base'},function(e) {
		$.post("forget_password_action.php", $("#forget").serialize());
		location.href='forget_password_action.php';
	});
});

</script>

<div>
	<h1>Forgot Password</h1>
	<p>Please complete the form below. If this is the first time you are accessing the Coursera platform, you may want to register instead.</p>
</div>

<form id="forget" width="400px" title="Forgot Password">
Email address: <input type="text" name="email" place="Email" validate="email" size="30"/><br>
<input type="submit" value="Reset Password">    
</form>
