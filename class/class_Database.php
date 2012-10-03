<?php

require 'db_config.php';

class Database {

	private $__data;
	private $__num_rows;
	private static $__mysqli = null;

	# 確保只會開啟一個SQL連線
	public function __construct() { 
		if (self::$__mysqli == null)
			self::$__mysqli = $this->connect();
	}

	private function connect() {
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
		if ($mysqli->connect_errno) {
    		die("Failed to connect to MySQL: " . $mysqli->connect_error);
		}
		$mysqli->query("SET NAMES 'utf8'");
		return $mysqli;
	}

	# 執行SQL Select命令 (有回傳值)
	public function query($sql) {

		$result = self::$__mysqli->query($sql);
		
		# query 執行失敗
		if ($result === FALSE) {
			throw new Exception("Bad SQL!! [$sql]");
		}
		
		# 執行DELETE,UPDATE,INSERT成功會回傳True
		if ($result === TRUE) {
			return TRUE;
		}

		$this->__num_rows = $result->num_rows;

		$this->__data = array();
		while ($row = $result->fetch_assoc()) {
			$this->__data[] = $row;
		}
		return $this->__data;
	}

	# 執行SQL其他命令 (無回傳值, 像Update, Insert, Delete等等)
	public function execute($sql){
		$result = self::$__mysqli->query($sql);
		
		if ($result === FALSE) { # query 執行失敗
			throw new Exception("Bad SQL!! [$sql]");
		}
	}

	# 傳回整張資料表 
	public function getTable(){
		return $this->__data;
	}

	# 只回傳一筆資料(a row)
	public function getRow( $rowIndex ){
		return $this->__data[$rowIndex];
	}

	# 回傳第一筆資料
	public function firstRow() {
		return $this->__data[0];
	}
	
	# 總共有幾筆資料
	public function num_rows(){
		return $this->__num_rows;
	}
	
	# 工作完成，關閉連線(Mysql可不呼叫)
	public function done(){
		self::$__mysqli->close();
	}
	
	# 傳回最新的auto increment id
	public function insert_id(){
		return self::$__mysqli->insert_id;
	}

	public function escape($str) {
		return self::$__mysqli->escape_string($str);
	}
}

/*
 	//測試用

	$db = new Database();

	$db->query("SELECT * FROM member ");
	$r = $db->getTable();
	echo "<pre>";
	print_r($r);
	echo "</pre>";

<<<<<<< HEAD
*/
=======
/*
>>>>>>> f54285bae726325054fdb2e8aae1950517928c9c
?>
