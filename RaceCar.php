<?php
include_once('RaceCarInterface.php');
include_once('Car.php');
include_once('Engine.php');
class RaceCar extends Car implements RaceCarInterface{
	private $engine;
	
	public function RaceCar($brand, $model, $color, $doors_num, Engine $engine){
		$this->brand = $brand;
		$this->model = $model;
		$this->color = $color;
		$this->doors_num = $doors_num;
		$this->engine = $engine;
	}
	public function setEngine(Engine $engine){
		$this->engine = $engine;
	}
	public function getVMax(){
		return ($this->engine->getHP()*2)+20;
	}
	
	public function getAcceleration(){
		return $this->engine->getHP()*0.25;
	}
}
?>
