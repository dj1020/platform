<?php 

function XD($tableName) {
	return new XDFactory($tableName);
}

class XDFactory {
	
	private $tableName;
	private $object;
	private $db;

	private $where_clause;
	private $orderby_clause;
	private $limit_clause;

	public function __construct($tableName, $mock_db = null) { 
		
		$this->db = ($mock_db!=null)? $mock_db : new Database;
		
		$this->tableName = $this->db->escape($tableName);
		$this->object = new $tableName; 

	}

	# primary key search
	public function find($target) {

		if (is_array($target))
			return $this->multiple_find($target);

		$pkey = $this->object->primaryKeyName();
		$target = $this->db->escape($target);
        
		$sql = "SELECT * FROM {$this->tableName} WHERE $pkey='$target'";        
        $this->db->query($sql);
		
		if ($this->db->num_rows() == 0){ //沒有這筆資料
			return NULL;
		}
		return new $this->tableName($this->db->firstRow());
	}

	private function multiple_find($u_target) {

		$safe_target = array(); //safe
		foreach ($u_target as $t)
			$safe_target[] = $this->db->escape($t);

		$where = "'" . implode("','", $safe_target) . "'";

		$pkey = $this->object->primaryKeyName();		
		$sql = "SELECT * FROM {$this->tableName} WHERE $pkey IN ($where)";

		#echo $sql;

		$result = $this->db->query($sql);
		if ($this->db->num_rows() === 0){ //沒有這筆資料
			return array();
		}

		$objectArray = array(); 
		foreach ($result as $row) {
			$objectArray[] = new $this->tableName( $row );
		}        
		return $objectArray;
	}

	public function __call($name, $arguments) {
		
    	if ($this->startsWith($name, 'find_by_')) {
    		$field = substr($name, 8); // 從第八個字元以後就是欄位名
			return $this->field_query($field, $arguments[0]);
    	}
    }

    private function field_query($fieldName, $value) {
        
		$value = $this->db->escape($value);
		$sql = "SELECT * FROM {$this->tableName} WHERE $fieldName='$value'";

		if (isset($this->where_clause))
			$sql .= ' AND ' . $this->where_clause;

		if (isset($this->orderby_clause))
			$sql .= $this->orderby_clause;

		if (isset($this->limit_clause))
			$sql .= $this->limit_clause;
		# echo $sql;
		$result = $this->db->query($sql);

		if ($this->db->num_rows() === 0){ //沒有這筆資料
			return array();
		}

		$objectArray = array(); 
		foreach ($result as $row) {
			$objectArray[] = new $this->tableName( $row );
		}        
		return $objectArray;
    }

    public function all($conditions = null) {    	
    	$sql = "SELECT * FROM {$this->tableName}";

    	if ($conditions !== null)
    		$this->where($conditions);

    	if (isset($this->where_clause)) 
    		$sql .= ' WHERE ' . $this->where_clause;	

    	if (isset($this->orderby_clause))
    		$sql .= $this->orderby_clause;

    	if (isset($this->limit_clause))
    		$sql .= $this->limit_clause;

    	#echo 'My sql=' , $sql;

    	$result = $this->db->query($sql);
    	if ($this->db->num_rows() == 0)
    		return array();

    	$objectArray = array();    	
    	foreach ($result as $row) {
			$objectArray[] = new $this->tableName( $row );
		}
		
		return $objectArray;
    }

    public function first() {

    }

    public function query($sql) {
    	$this->db->query($sql);
		if ($this->db->num_rows() == 0){ //沒有這筆資料
			return NULL;
		}
		return new $this->tableName($this->db->firstRow());
    }    

    public function where($conditions) {
    	#產生條件子句
    	if (isset($conditions)) {			
			$c = array();
    		foreach ($conditions as $key => $value) {
    			$key   = $this->db->escape($key);
    			$value = $this->db->escape($value);
    			$c[] =  "$key='$value'";
    		}
    		$this->where_clause = implode(' AND ', $c);    		
    	}
    	return $this;
    }

    public function limit($start, $num) {
    	$this->limit_clause = " LIMIT $start, $num";
        return $this;
    }

    public function order_by($field) {
        $field = $this->db->escape($field);
    	$this->orderby_clause = " ORDER BY $field";
        return $this;
    }    

    private function startsWith($haystack, $needle) {
    	return strpos($haystack, $needle) === 0;
	}

    public function count() {
        $sql = "SELECT Count(1) FROM {$this->tableName}";

        if (isset($this->where_clause)) {
        	$sql .= ' WHERE ' . $this->where_clause;
        }
        $result = $this->db->query($sql);
        return $result[0]["Count(1)"];
    }

    public function delete($id) {

    	$id = $this->db->escape($id);
    	$pkey = $this->object->primaryKeyName();
    	$sql = "DELETE FROM {$this->tableName} WHERE $pkey='$id'";
    	$this->db->execute($sql);
    }
}
