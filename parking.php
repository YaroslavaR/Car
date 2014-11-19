<?php

	include_once('car.php');

	//$car = new Car();

	//echo $car->helloCar();
class Parking {
	public function introduceCar(Car $c){
	
	return "Hello! It's me - your car: ".$c->getColor()." ".$c->getBrand()." ".$c->getModel()." :) \n";

	}

	$myCar = new Car("Fiat","126","puzzle",2);
	$otherCar = new Car("Opel","Astra","purple",5);
	
	echo introduceCar($myCar);
	echo $otherCar->helloCar();

}

?>
