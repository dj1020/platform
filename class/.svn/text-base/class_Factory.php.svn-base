<?php

#===================================
#  
#	物件工廠
#
#===================================

class Factory {
		
	/* 回傳單一物件 */
	public static function getObject( $className, $sql ){
		$db = new Database();
		$db->query($sql);
		
		if($db->num_rows()==0){ //沒有這筆資料
			return NULL;
		}			
		$object = new $className( $db->getRow(0) ); 
		
		return $object;
	}
	
	
	/* 回傳物件陣列 */
	public static function getObjectArray( $className, $sql ){
		$db = new Database();
		$db->query($sql);
		
		$objectArray = array();
		
		if($db->num_rows()==0) //沒有資料，回傳空陣列
			return $objectArray;
				
		//將資料填到memberArray裡
		$table = $db->getTable();
		
		foreach( $table as $row ){
			$object = new $className( $row );
			$objectArray[] = $object;
		}
		
		return $objectArray;
	}
	
}
?>