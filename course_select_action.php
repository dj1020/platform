<?php
require 'lib.php'; 

$select = new Selection_table;

$fields = array('course_ID','email');
foreach($fields as $f) {
	$select->$f = $_POST[$f];
}
$select->save();
header("Location: index.php");
