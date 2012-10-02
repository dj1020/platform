<?php
require 'lib.php'; 
require 'mailer.php';
$m = new Member;
$_POST['password']=md5($_POST['password']);
$fields = array('name', 'email', 'password');
foreach($fields as $f) {
	$m->$f = $_POST[$f];
}
$m->save();

$auth = new Authenticate;
$auth -> email = $_POST['email'];
$auth -> auth_num = md5($_POST['email']);
$auth -> save();

send_email($_POST['email'],$_POST['name'],md5($_POST['email']));

//header("Location: index.php");

