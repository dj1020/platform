<<<<<<< HEAD
<?php
require 'lib.php'; 
$member = XD('Member')->find($_SESSION['email']);

$fields = array('privacy', 'location', 'gender', 'birth_month', 'birth_day', 'birth_year', 'about_me', 'website', 'linkedin', 'facebook', 'twitter', 'gplus', 'github');
foreach($fields as $f) {
	$member->$f = $_POST[$f];
}
$member->save();
header("Location:profile.php");
=======
<?php
require 'lib.php'; 
$member = XD('Member')->find($_SESSION['email']);

$fields = array('privacy', 'location', 'gender', 'birth_month', 'birth_day', 'birth_year', 'about_me', 'website', 'linkedin', 'facebook', 'twitter', 'gplus', 'github');
foreach($fields as $f) {
	$member->$f = $_POST[$f];
}
$member->save();
header("Location:profile.php");
>>>>>>> f54285bae726325054fdb2e8aae1950517928c9c
