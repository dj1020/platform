<?php

require 'class/db_config.php';

		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
		if ($mysqli->connect_errno) {
    		die("Failed to connect to MySQL: " . $mysqli->connect_error);
		}
		$mysqli->query("SET NAMES 'utf8'");
		//return $mysqli;



	$r = $mysqli->query("SELECT * FROM member ");
	echo "<pre>";
	var_dump($r);
	echo "</pre>";


?> 
