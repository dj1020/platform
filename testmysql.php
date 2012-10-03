<?php 
# ===============================
#   Database setting
# ===============================

/* 
define('DB_HOST', '140.115.156.34');
define('DB_USER', 'edux');
define('DB_PASSWORD', 'edux');
define('DB_DATABASE', 'coursera');
 */

define('DB_HOST', 'localhost');
define('DB_USER', 'eduxglob_video');
define('DB_PASSWORD', 'eduxedux');
define('DB_DATABASE', 'eduxglob_platform');


$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE); 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 
echo 'Connection OK'; mysql_close($link); 
?> 