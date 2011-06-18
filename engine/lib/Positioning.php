<?php


class Positioning {

	private $_player;
	public $maxPlayerWalkingLenght = 100;
	
	public function Positioning(){
		
	}

	public function getSlightlyLessRandoms($playerShirtNumber){
		$this->_player = new Player($playerShirtNumber);
		$initialPos= array(11,11);
		$ballPos = getBallCurrentPos();

		if ($currentPlayerPos[0] < ($ballPos[0]+$this->maxPlayerWalkingLenght) ) {
			$finalPosX = $ballPos[0];
		} else {
			$finalPosX = $this->maxPlayerWalkingLenght;
		}

		if ($currentPlayerPos[1] < ($ballPos[1]+$this->maxPlayerWalkingLenght) ) {
			$finalPosY = $ballPos[1];
		} else {
			$finalPosY = $this->maxPlayerWalkingLenght;
		}

		writeCurrentPos($finalPosX.",".$finalPosY);
		return array($finalPosX, $finalPosY);
	}

	public function getRandoms(){
		$x = rand(11, 450);
		$y = rand(11, 600);
		return array($x, $y);
	}

	public function getDeadCenterPos(){
		$x = 225;
		$y = 300;
		return array($x, $y);
	}
	
	public function getResetPosition($playerShirtNumber){
		switch ($playerShirtNumber){
			
			
		/**********
		 * TEAM 1
		 * *******/	
			//keeper
			case 1:
				$x = (450/2);
				$y = 11;
				return array($x, $y);
				break;
			
			//left back
			case 2:
				$x = ((225/8)*3);
				$y = ((600/16)*3);
				return array($x, $y);
				break;
			
			//left full back
			case 3:
				$x = ((225/8)*6);
				$y = ((600/16)*3);
				return array($x, $y);
				break;
			
			//right full back
			case 4:
				$x = ((225/8)*10);
				$y = ((600/16)*3);
				return array($x, $y);
				break;
			
			//right back
			case 5:
				$x = ((225/8)*14);
				$y = ((600/16)*3);
				return array($x, $y);
				break;
			
			//left wing
			case 6:
				$x = ((225/8)*3);
				$y = ((600/16)*5);
				return array($x, $y);
				break;
				
			//left mid
			case 7:
				$x = ((225/8)*6);
				$y = ((600/16)*5);
				return array($x, $y);
				break;
			
			//right mid
			case 8:
				$x = ((225/8)*10);
				$y = ((600/16)*5);
				return array($x, $y);
				break;
			
			//right wing
			case 9:
				$x = ((225/8)*14);
				$y = ((600/16)*5);
				return array($x, $y);
				break;
			
			//left attack
			case 10:
				$x = ((225/8)*6);
				$y = ((600/16)*7);
				return array($x, $y);
				break;
			
			//right attack
			case 11:
				$x = ((225/8)*10);
				$y = ((600/16)*7);
				return array($x, $y);
				break;
			
		/***********
		 * TEAM 2
		 * *********/
			//keeper
			case 12:
				$x = (450/2);
				$y = 600;
				return array($x, $y);
				break;
			
			//left back
			case 13:
				$x = ((225/8)*14);
				$y = ((600/16)*14);
				return array($x, $y);
				break;
			
			//left full back
			case 14:
				$x = ((225/8)*10);
				$y = ((600/16)*14);
				return array($x, $y);
				break;
			
			//right full back
			case 15:
				$x = ((225/8)*6);
				$y = ((600/16)*14);
				return array($x, $y);
				break;
			
			//right back
			case 16:
				$x = ((225/8)*3);
				$y = ((600/16)*14);
				return array($x, $y);
				break;
			
			//left wing
			case 17:
				$x = ((225/8)*14);
				$y = ((600/16)*12);
				return array($x, $y);
				break;
				
			//left mid
			case 18:
				$x = ((225/8)*10);
				$y = ((600/16)*12);
				return array($x, $y);
				break;
			
			//right mid
			case 19:
				$x = ((225/8)*6);
				$y = ((600/16)*12);
				return array($x, $y);
				break;
			
			//right wing
			case 20:
				$x = ((225/8)*3);
				$y = ((600/16)*12);
				return array($x, $y);
				break;
			
			//left attack
			case 21:
				$x = ((225/8)*6);
				$y = ((600/16)*9);
				return array($x, $y);
				break;
			
			//right attack
			case 22:
				$x = ((225/8)*10);
				$y = ((600/16)*9);
				return array($x, $y);
				break;
				
			
			default:
				$x = 225;
				$y = 300;
				return array($x, $y);
				break;
		}
	}

}
