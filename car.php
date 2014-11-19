<?php

include_once('CarInterface.php');

class Car{

	private $brand;
	private $model;
	private $color;
	private $numberOfDoors;

	//public function Car(){
	//	
	//	$this->brand="Ford";
	//	$this->model="Fiesta";
	//	$this->color="rainbow-colored";
	//	$this->numberOfDoors=5;
	//	
	//
	//}
	
	public function Car($b,$m,$c,$nod){
        
              $this->brand=$b;
              $this->model=$m;
              $this->color=$c;
              $this->numberOfDoors=$nod;
        
        
        }

	public function helloCar(){

		return "Hello! It's me - your car: ".$this->color." ".$this->brand." ".$this->model." :) \n";
	
	}
		public function getBrand(){
			return $this->brand;
		}
                public function setBrand($brand){
			$this->brand=$brand;
		}
                public function getModel(){
			return $this->model;
		}	
                public function setModel($model){
			$this->brand=$model;
		}
                public function getColor(){
			return $this->color;
		}
                public function setColor($color){
			$this->brand=$color;
		}
                public function getNumberOfDoors(){
			return $this->numberOfDoors;
		}
                public function setNumberOfDoors($numberOfDoors){
			$this->brand=$numberOfDoors;
		}

}

?>
