<?php 
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
