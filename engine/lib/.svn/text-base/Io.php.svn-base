<?php
/*
 * Class enables input output functions
 */
class Io{

	private $_fullPath ;
	private $_accessType = "a";

	public function io(){
		
	}
		
	public function setPath($path) {
		$this->_fullPath = $path;
	}

	public function setAccessType($type) {
		$this->_accessType = $type;
	}

	public function write($message){
		$fp = fopen($this->_fullPath, $this->_accessType);
		fwrite($fp,  $message);
		fclose($fp);
	}
	
	public function writeDebug($message){
		$this->_fullPath = "../global_includes/debug/Debug.txt";
		$this->_accessType = "a+";
		$fp = fopen($this->_fullPath, $this->_accessType);
		fwrite($fp,  date("r", time())." ".$message."\n\r");
		fclose($fp);
	}
	

}