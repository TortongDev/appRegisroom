<?php
require_once "../conf/conf_database.php";

class Connection {
		public $hostname 	= HOSTNAME;
		public $username 	= USERNAME;
		public $password	= PASSWORD;
		public $dbname 		= DBNAME;
		public static $db;
		public function __construct(){

		}
		public function openConnection(){
			try{
				$conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname;",$this->username,$this->password);
				$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				self::$db = $conn;
				echo json_encode(array('status'=>'connection is successfully.'));
			}catch(PDOException $err){
				echo $err->getMessage();
			}
		}
		public function closeConnection(){
			self::$db 	= null;
			$conn 		= null;
		}
}




?>