<?php
require 'lib.php'; 

$m = new Member;
$_POST['password']=md5($_POST['password']);
$fields = array('name', 'email', 'password');
foreach($fields as $f) {
	$m->$f = $_POST[$f];
}
$m->save();
header("Location: index.php");
