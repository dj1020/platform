<?php require 'lib.php';
//if(ereg("[0-9a-zA-Z]+$",$_POST['email'])&&ereg("[0-9a-zA-Z]+$",$_POST['password'])){

<<<<<<< HEAD

	$member = XD('Member')->find($_POST['email']);
	if($member==NULL){  
		//Error::PageBack_and_Alert( "查無此帳號,請重新輸入" ); //回上一頁並提出警告
		//exit();
		echo json_encode(array("check"=>"fail",));
=======
	$member = XD('Member')->find($_POST['email']);
	if($member==NULL){  
		Error::PageBack_and_Alert( "查無此帳號,請重新輸入" ); //回上一頁並提出警告
		exit();
>>>>>>> f54285bae726325054fdb2e8aae1950517928c9c
	}
	else if( strcmp($member->email,$_POST['email'])==0 && strcmp($member->password, md5($_POST['password']))==0 ) //登入成功
	{
	//登錄使用者account跟type進session
		$_SESSION['email'] = $member->email;
<<<<<<< HEAD
		echo json_encode(array("check"=>"success",));

		//header("Location:index.php");
	}
	else //登入不成功
	{
		//Error::PageBack_and_Alert( "登入失敗,您輸入的使用者名稱或密碼錯誤" ); //回上一頁並提出警告
		//exit();
		echo json_encode(array("check"=>"fail",));
=======
		echo "<script> alert('OK'); </scrpit>";
		header("Location:index.php");
	}
	else //登入不成功
	{
		Error::PageBack_and_Alert( "登入失敗,您輸入的使用者名稱或密碼錯誤" ); //回上一頁並提出警告
		exit();
>>>>>>> f54285bae726325054fdb2e8aae1950517928c9c
	}

?>
