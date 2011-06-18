<?php

class Game {

	public static $instance;
	public $time;
	public $playNumber;
	public $instructionsFile;

	public function Game($playNumber = 0) {
		$this->playNumber = $playNumber;
		$this->db = new Db();
		//$this->games = doctrine_Doctrine_Core::getTable('Games');
		//$this->db->setNewGame("first Game");
		//$this->db->setGameDetails("1", $playNumber, "1");
	}
	
	public static function autoloader($className){
//print ($className."<br>");
        $classPath = str_replace('_', '/', $className) . '.php';
        require_once($classPath);
	}
	
	public static function getInstance($playNumber = 0) {
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c ($playNumber);
        }
        return self::$instance;
    }




	public function getInstructions(){
		$this->loadInstructionsFile();
		$positions = new Positioning();
		if ($this->playNumber == 1){
		$finalArray =
				array(
					array("ball", $positions->getDeadCenterPos())
					,array("play", $this->playNumber)
					,array(1, $positions->getResetPosition(1))
					,array(2, $positions->getResetPosition(2))
					,array(3, $positions->getResetPosition(3))
					,array(4, $positions->getResetPosition(4))
					,array(5, $positions->getResetPosition(5))
					,array(6, $positions->getResetPosition(6))
					,array(7, $positions->getResetPosition(7))
					,array(8, $positions->getResetPosition(8))
					,array(9, $positions->getResetPosition(9))
					,array(10, $positions->getResetPosition(10))
					,array(11, $positions->getResetPosition(11))
					,array(12, $positions->getResetPosition(12))
					,array(13, $positions->getResetPosition(13))
					,array(14, $positions->getResetPosition(14))
					,array(15, $positions->getResetPosition(15))
					,array(16, $positions->getResetPosition(16))
					,array(17, $positions->getResetPosition(17))
					,array(18, $positions->getResetPosition(18))
					,array(19, $positions->getResetPosition(19))
					,array(20, $positions->getResetPosition(20))
					,array(21, $positions->getResetPosition(21))
					,array(22, $positions->getResetPosition(22))
					
				);
		} else {
			$finalArray =
			array(
				array("ball", $positions->getDeadCenterPos())
				,array("play", $this->playNumber)
				,array(1, $positions->getRandoms())
				,array(2, $positions->getRandoms())
				,array(3, $positions->getRandoms())
				,array(4, $positions->getRandoms())
				,array(5, $positions->getRandoms())
				,array(6, $positions->getRandoms())
				,array(7, $positions->getRandoms())
				,array(8, $positions->getRandoms())
				,array(9, $positions->getRandoms())
				,array(10, $positions->getRandoms())
				,array(11, $positions->getRandoms())
				,array(12, $positions->getRandoms())
				,array(13, $positions->getRandoms())
				,array(14, $positions->getRandoms())
				,array(15, $positions->getRandoms())
				,array(16, $positions->getRandoms())
				,array(17, $positions->getRandoms())
				,array(18, $positions->getRandoms())
				,array(19, $positions->getRandoms())
				,array(20, $positions->getRandoms())
				,array(21, $positions->getRandoms())
				,array(22, $positions->getRandoms())
				
			);
		}
		return $finalArray;
		

	}
	
	
	public function loadInstructionsFile(){
		$instructionsFile = "Instructions.xml";
		$fp = fopen( $instructionsFile, "r");
		$this->instructionsFile = fread($fp, filesize($instructionsFile));
		fclose($fp);
		
	}
	


}
