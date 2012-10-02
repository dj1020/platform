<?php
require 'lib.php'; 

$auth = XD('Authenticate')->find_by_auth_num($_GET['key']);
if($auth){
	$member = XD('Member')->find($auth->email);
	
	if($member){
		//level up!!
		$member -> level = 1;
		$member -> save();
		//delete from auth table
		XD('Authenticate')->delete($auth->auth_num); 
		Error::Pageto_and_Alert("通過認證，歡迎開始使用！","index.php");
		exit();

	}
	else{
		Error::Pageto_and_Alert("查不到您的申請記錄！請確認或聯絡管理員","index.php");
		exit();

	}
}
else{
	Error::Pageto_and_Alert("查不到您的申請記錄22！請確認或聯絡管理員","index.php");
	exit();
}

