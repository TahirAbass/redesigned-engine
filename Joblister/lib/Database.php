<?php 

class Database{
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $dbname = DB_NAME;

	private $dbh;
	private $error; 
	private $stmt;

	public function __construct(){
		// Set DSN PDO -- A way to connect to database.
		$dsn = 'mysql:host='. $this->host .';dbname='. $this->dbname;

		// set Options 
		$Options = array(
		PDO::ATTR_PERSISTENT => true,
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
		);

		// PDO Instance

		try{
			$this->dbh = new PDO($dsn,$this->user, $this->pass,$Options); 
		} catch(PDOException $e) {
			$this->error = $e->getMessagge();
			}
		}
		// to excute the query 
	public function query($query){
			$this->stmt = $this->dbh->prepare($query);
	}	
		// value against same parameter
	public function bind($param, $value, $type = null){
			if(is_null($type)){
				switch(true){
					 case is_int ( $value ) : 
					 	$type = PDO::PARAM_INT;
					 	break;
					 case is_bool ( $value ) : 
					 	$type = PDO::PARAM_BOOL;
					 	break;
					 case is_null ( $value ) : 
					 	$type = PDO::PARAM_NULL;
					 	break;
					 default:
					 	$type = PDO::PARAM_STR;
				}
			}
			$this->stmt->bindValue($param, $value, $type);
	}
		// execute to fetch the result. Return function says so.
	public function execute(){
		return $this->stmt->execute();
	}
		// to fetch the results
	public function resultSet(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}
		// to fetch the single result
	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_OBJ);
	}
}