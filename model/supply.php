<?php 

class Supply {

	private $table = 'supply';
	private $conection;

	public function __construct() {
		
	}

	/* Set conection */
	public function getConection(){
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}

	/* Get all notes */
	public function getSupplies(){
		$this->getConection();
		$sql = "SELECT * FROM ".$this->table;
		$stmt = $this->conection->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}

	/* Get note by id */
	public function getSupplyByCategoryId($categoryId){
		if(is_null($categoryId)) return false;
		$this->getConection();
		$sql = "SELECT * FROM ".$this->table. " WHERE category_id = ?";
		$stmt = $this->conection->prepare($sql);
		$stmt->execute([$categoryId]);

		return $stmt->fetchAll();
	}

}

?>