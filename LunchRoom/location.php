<?php
class location{
	private $neighbors;
	private $distanceToKeg;
	
	/*
	Instantiates a location
	Arguments: none
	Returns: none
	*/
	function __contruct(){
		$this->neighbors = null;
		$this->distanceToKeg = 0;
	}
	
	/*
	Set the neighbors for the location
	Arguments: Array of neighbors
	Return: none
	*/
	private function setNeighbors($neighbors) {
		$this->neighbors=$neighbors;
	}
	
	/*
	Returns array of neighbors
	Arguments: None	
	Return: array of neighbors
	*/
	private function getNeighbors() {
		return $neighbors;
	}
	
	/*
	Sets distance to the keg
	Arguments: int $distanceToKeg
	Return: none
	*/
	private function setDistanceToKeg($distanceToKeg) {
		$this->distanceToKeg=$distanceToKeg;
	}
	
	/*
	Retrieves the distance to the keg
	Arguments: none
	Return: int $distanceToKeg
	*/
	private function getDistanceToKeg() {
		return $distanceToKeg;
	}

}
?>