<?php
require 'lib.php';


// 解壓縮後的檔案位置
require 'PHPMailer_v5.1/class.phpmailer.php';

// 產生 Mailer 實體
$mail = new PHPMailer();

// 設定為 SMTP 方式寄信
$mail->IsSMTP();

// SMTP 伺服器的設定，以及驗證資訊
$mail->SMTPAuth = true;      
$mail->SMTPSecure = "ssl";    
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;

// 信件內容的編碼方式       
$mail->CharSet = "utf-8";

// 信件處理的編碼方式
$mail->Encoding = "base64";

// SMTP 驗證的使用者資訊
$mail->Username = "jerry30121@gmail.com";
$mail->Password = "chacha24";     

// 信件內容設定  
$mail->From = "jerry30121@gmail.com";
$mail->FromName = "Platform Administrator";
$mail->Subject = "Platform 會員認證"; 
$mail->Body = "testing!!!";    
$mail->IsHTML(true);

// 收件人
$mail->AddAddress("jerry30121@gmail.com","testtest");


// 顯示訊息
if(!$mail->Send()) {     
echo "Mail error: " . $mail->ErrorInfo;     
}else {     
Error:: Pageto_and_Alert("註冊尚未完成！請去您指定的電子郵件信箱內點取認證信，謝謝","http://140.115.156.34/coursera/");  
} 

?>
