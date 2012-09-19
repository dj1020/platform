<?php

class Model {
	
	private $modelName;
	private $sql;
	private $joinModels = array();
	
	public function __construct( $name , $sql){
		$this->modelName = $name;
		$this->sql = $sql;
	}

	public function addJoin( $model ){
		$this->joinModels[] = $model;
	}

	
	/* 回傳單一物件 */
	public function getOne(){
		
		$db = new Database();
		$db->query($this->sql);
		
		if($db->num_rows()==0){ //沒有這筆資料
			return NULL;
		}			
		$object = new $this->modelName( $db->getRow(0) ); 
		
		foreach( $this->joinModels as $joinModel ){
			$object->addItem( $joinModel, new $joinModel( $db->getRow(0)) ) ;
		}
		
		return $object;
	}
	
	/* 回傳物件陣列 */
	public function getArray(){
		
		$db = new Database();
		$db->query($this->sql);
		
		$objectArray = array();
		
		if($db->num_rows()==0) //沒有資料，回傳空陣列
			return $objectArray;
				
		//將資料填到memberArray裡
		
		foreach( $db->getTable() as $row ){

			$object = new $this->modelName( $row );
			
			foreach( $this->joinModels as $joinModel ){
				$object->addItem( $joinModel, new $joinModel($row) );
			}
			
			$objectArray[] = $object;
		}
		
		return $objectArray;
	}
}
?>