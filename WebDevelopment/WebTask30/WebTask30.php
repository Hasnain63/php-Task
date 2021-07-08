<?php 

class Person {
	public $arms;
	public $legs;
	// Add a constructor to this class that should recieve a paramter $message and assign it to $message property of class
	public function __construct($arms, $legs) {
		$this ->arms = $arms;
		$this ->legs = $legs;
	}
	public function showPerson() {
		/* When this function is called from an object, Echo Ouput as follow:
		 (This person has 2 arms and 2 legs) */
		 echo $this-> arms;
		 echo $this-> legs;
	}
}

// Create Two objects of class Person. 

$person = new Person("This person has two arms and " , "Two legs");
$person->showPerson();

$arm = "<br>"."Snake has no arms";
$leg = "<br>"."Animals have four legs";
$person2 = new Person($arm , $leg);
$person2->showPerson();