<?php 

class User {

	private $table = 'user';
	private $conection;

	public function __construct() {
		
	}

	/* Set conection */
	public function getConection(){
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}

    public function getUserByEmail($email){
		if(is_null($email)) return false;
		$this->getConection();
		$sql = "SELECT * FROM ".$this->table. " WHERE email = ?";
		$stmt = $this->conection->prepare($sql);
		$stmt->execute([$email]);

		return $stmt->fetch();
	}

	public function save($param){
		$this->getConection();
        
        $actualUser = $this->getUserByEmail($param["email"]);
        if(isset($actualUser["email"])){
            return $actualUser["id"];	
        }

		/* Set default values */
		$name = $email = $provider = "";

		if(isset($param["name"])) $name = $param["name"];
		if(isset($param["email"])) $email = $param["email"];
        if(isset($param["provider"])) $provider = $param["provider"];

		$sql = "INSERT INTO ".$this->table. " (name, email, provider) values(?, ?, ?)";
        $stmt = $this->conection->prepare($sql);
        $stmt->execute([$name, $email, $provider]);
        $id = $this->conection->lastInsertId();

		return $id;	

	}

}

?>