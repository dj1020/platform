<?php
require 'lib.php'; 
?>
<!DOCTYPE HTML>
<html>
<head>
	<?php head('Sign in');?>
</head>
<body>
   <div>
	<h1>Sign In.</h1>
	<p>Sign into your Coursera account with an email and a previously chosen password.</p>
   </div>
<br>
   <div>
    <form action="sign_in_check" method="post">
    <li>Email Address:<input name="email" type="text" size="25" maxlength="25" /></li>
    <li>Password:<input name="password" type="password" size="25" maxlength="25" /></li> 
    <input type="submit" value="Sign In">
    <a href="forget_password.php">forgot password?</a>
    </form>
  </div>   
<br>
   <div>
	<p>No account yet?</p>
	<p><a href="sign_up.php">Sign up</a> today.</p>
  </div> 
</body>
</html>
