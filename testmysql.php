<?php 
<<<<<<< HEAD
$link = mysql_connect('localhost','eduxglob_video','eduxedux','eduxglob_platform'); 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 
mysql_query("SET NAMES 'utf8'");
mysql_select_db('eduxglob_platform');
    $sql = "SELECT * from `member`";
    $result = mysql_query($sql) or die('MySQL query error!');
    while($row = mysql_fetch_array($result)){
        echo $row['name'];
    }
echo 'Connection OK'; mysql_close($link); 
?> 
=======
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
>>>>>>> f54285bae726325054fdb2e8aae1950517928c9c
