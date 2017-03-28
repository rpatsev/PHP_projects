<?php 

use Symfony\Component\Validator\Constraints as Assert;

class User {
	/**
	* @Assert\NotBlank
	* @Assert\Length(min=10)
	*/
	public $name;
	/**
	* @Assert\Range(min=0,max=100)
	*/
	public $age;
 
 	public function __construct($name, $age){
 		$this->name = $name;
 		$this->age = $age;
 	}

}

?>