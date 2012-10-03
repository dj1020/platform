<?php
require 'lib.php'; 

$select = new Selection_table;

$select->course_ID = $_POST['course_ID'];
$select->email = $_SESSION['email'];

$select->save();
header("Location: index.php");
