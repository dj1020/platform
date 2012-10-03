<?php

/**
 * RootObject是所有資料庫物件的繼承根源
 */
abstract class RootObject {
	
	# 這三個屬性child必須覆寫	
	protected $tableName;  ///對應到的DB table name
	protected $pkey; 	///table的primary key欄位名稱 
	protected $isAutoIncrement = false; ///主鍵是否使用auto_increment

	
	# 這裡的屬性不應改動
	private $__data; //資料欄位(這是個關聯陣列)
	private $__isInDB = false; //這筆資料是否已經存在資料庫裡面
	private $__modified; //更動紀錄表，紀錄哪些屬性被更動過，用於save()
	private $__sql; //最近一次執行的SQL命令	

	#有DB row的話就用row來初始，否則就全部填0  
	public function __construct( $db_row=0 ){

		if ($db_row != 0) {
			$this->__data = $db_row;
			$this->__isInDB = true;			
		} else {
			$this->__data = array();
			$this->__isInDB = false;
		}
		$this->__modified = array();
	}

	#getter and setter
	private function __set($key, $value) {
		
		if ($this->isAutoIncrement and $key==$this->pkey) {
			throw new Exception("AutoIncrment，你不應該更動物件的Primary Key! (怒)");
		}		

		$this->__data[$key] = $value;
		
		if (!in_array($key, $this->__modified))
			$this->__modified[] = $key; //加入更動表		
	}
	
	private function __get($key) {		

		if (!$this->hasField($key))
			throw new Exception("科科! 物件沒有 $key 這個欄位喔!");
		return $this->__data[$key];
	}		
	
	# for empty() & isset()
	# @Note Dangerous!
	public function __isset($key) {
        if (isset($this->__data[$key])) {
            return (false === empty($this->__data[$key]));
        } else {
            return null;
        }
    }

	# 該欄位是否存在本物件裡
	public function hasField($name) {
		return array_key_exists($name, $this->__data);
	}

	# 因為auto increment中主鍵應該留空，從$this->__modified 中移除主鍵值，
	private function removePrimaryKey() {
		$pkey_index = array_search( $this->pkey, $this->__modified );
		if ($pkey_index != NULL)
			unset( $this->__modified[ $index ] );	
	}

	
	# 更新資料庫內容	
	# 依據 isInDB 判斷要使用insert或者update
	public function save($mock_db=NULL) {
		
		//沒有東西需要更動
		if (count($this->__modified) == 0)
			return;		
		
		//auto_increment的主鍵要踢掉
		if ($this->isAutoIncrement) {
			$this->removePrimaryKey();
		}
		
		if ( $this->__isInDB === false ) {
			//資料尚未存進DB，做Insert SQL					
			$this->__sql = $this->buildSQLInsert();												
		} else { 		
			//已經在DB有對應的資料了，做update SQL		
			$this->__sql = $this->buildSQLUpdate();
		}		
				
		$this->runSQL($mock_db);		
		$this->__isInDB = true; 

		# 回傳剛剛更新或者插入的pkey
		return $this->primaryKey();
	}

	public function runSQL($mock_db=NULL) {
		$db = ($mock_db!=NULL)? $mock_db : new Database;
		$db->execute($this->__sql);
		
		//如果是auto_increment 要拿出最新的insert id
		if ($this->isAutoIncrement and !$this->__isInDB){
			$this->__data[ $this->pkey ] = $db->insert_id(); 
		}
	}

	public function buildSQLInsert() {

		foreach( $this->__modified as $memberName ){					
			$fields[] = $memberName;
			$values[] = $this->__data[ $memberName ];
		}		
			
		$str_fields = implode(",",   $fields);
		$str_values = implode("','", $values);
				
		$sql = "INSERT INTO {$this->tableName} ($str_fields) VALUES ('$str_values')";		
		return $sql;
	}
	
	public function buildSQLUpdate() {
		
		$pair = array();
		foreach($this->__modified as $field){									
			$value = $this->__data[ $field ];
			$pair[] = "$field='$value'";
		}
		$sql = "UPDATE {$this->tableName} SET " . implode(',', $pair);

		//依據primary key更新資料
		$value = $this->primaryKey();			
		if (!isset($value)) {
			throw new Exception("本物件還沒有設定Primary Key!", 1);			
		}

		$sql .= " WHERE {$this->pkey}='$value'";
		return $sql;
	}

	public function lastSQL() {
		return $this->__sql;
	}

	# 從Database刪除這一筆資料
	public function delete() {
		
		$pkey_field = $this->map[ $this->pkey ];
		$pkey_value = $this->__data[$this->pkey];		
		$sql = "DELETE FROM $this->tableName WHERE $pkey_field = '$pkey_value' ";

		$db = new Database();
		$db->execute($sql);
		
		$this->__isInDB = false; //解除標記
	}
	
	# 取得主鍵值
	public function primaryKey() {		
		return $this->__data[ $this->pkey ];
	}

	public function primaryKeyName() {
		return $this->pkey;
	}
	
	public function __toString(){
		$s =  "物件 $this->tableName: <br />";
		$s .= "<pre>" . print_r($this->__data) . "</pre>";
		return $s;
	}
} //End Class RootObject

?>