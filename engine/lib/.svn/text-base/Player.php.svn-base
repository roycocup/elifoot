<?php

class Player extends InFieldObjects{

	public $maxPlayerWalkingLenght = 100;
	public $currentX;
	public $currentY; 
	
	
	public function getPlayerCurrentPos($player){
		if($fp = fopen($filePath, "r")){;
		$string = fread($fp, filesize($filePath));
		$string = explode(",", $string);
		fclose($fp);
		unset($filePath);
		return array($string[0], $string[1]);
		}else{
			return array(11,11);
		}
	}
	
}