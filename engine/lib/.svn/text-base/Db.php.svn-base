<?php
class Db {

	public $db;
	
	public function Db(){
		$dsn = 'mysql:dbname=elifoot2d;host=127.0.0.1';
		$user = 'rodrigo';
		$password = 'pitaonline';
		$dbh = new PDO($dsn, $user, $password);
		$this->db = Doctrine_Manager::connection($dbh);
		//Doctrine_Core::generateModelsFromDb('models', array('doctrine'), array('generateTableClasses' => true));
		//Doctrine_Core::generateYamlFromModels('schema.yml', 'models');
	}


	
	public function setNewGame($name){
		$this->db->exec("insert into Games ('name') values ($name)");	
		$this->db->lastInsertRowID();
	}


	public function setGameDetails ($gameId, $playNumber, $teamWithBallId){
		$this->db->exec("insert into GameDetails (\"gameId\", \"playNumber\", \"teamWithBallId\") 
							values ($gameId, $playNumber, $teamWithBallId)");
	}
	

}
