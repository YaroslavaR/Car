<?php

include_once('EngineInterface.php');
class Engine implements EngineInterface{
	private $getHP;
	public function RaceCar($getHP){
		$this->getHP = $getHP;
	}
	public funtion getHP(){
		return $this->getHP;
	}
	
}
?>
