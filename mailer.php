<?php
require 'lib.php';

function send_email($to,$name,$content){
// 解壓縮後的檔案位置
require 'PHPMailer_v5.1/class.phpmailer.php';

// 產生 Mailer 實體
$mail = new PHPMailer();

// 設定為 SMTP 方式寄信
$mail->IsSMTP();

// SMTP 伺服器的設定，以及驗證資訊
$mail->SMTPAuth = true;      
$mail->SMTPSecure = "ssl";    
$mail->Host = "localhost";
$mail->Port = 465;

// 信件內容的編碼方式       
$mail->CharSet = "utf-8";

// 信件處理的編碼方式
$mail->Encoding = "base64";

// SMTP 驗證的使用者資訊
$mail->Username = "jerry+idoclub.org";
$mail->Password = "edux20120910";     

// 信件內容設定  
$mail->From = "jerry@idoclub.org";
$mail->FromName = "Platform Administrator";
$mail->Subject = "Platform 會員認證"; 
$mail->Body = "請點下列的連結完成認證，謝謝!<br>http://140.115.156.34/coursera/auth.php?key=".$content;    
$mail->IsHTML(true);

// 收件人
$mail->AddAddress($to, $name);


// 顯示訊息
if(!$mail->Send()) {     
echo "Mail error: " . $mail->ErrorInfo;     
}else {     
echo "succeed!";
//echo $to."|||".$name;
//Error:: Pageto_and_Alert("註冊尚未完成！請去您指定的電子郵件信箱內點取認證信，謝謝","http://140.115.156.34/coursera/");  
} 
};
?>
