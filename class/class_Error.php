<?php

class Error {
	
	public static function PageBack_and_Alert( $errorMsg ){
		echo '<html>';
		echo '<head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><head>';
		echo '<body><script type="text/javascript" > alert("'.$errorMsg.'"); history.go(-1);</script></body>';
		echo '</html>';
	}
	
	public static function PageBack(){
		echo '<html>';
		echo '<head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><head>';
		echo '<body><script type="text/javascript" > history.go(-1);</script></body>';
		echo '</html>';
	}
	public static function Pageto_and_Alert( $errorMsg , $page){
		echo '<html>';
		echo '<head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><head>';
		echo '<body><script type="text/javascript" > alert("'.$errorMsg.'");location.href=\''.$page.'\';</script></body>';
		echo '</html>';
	}
}
?>
