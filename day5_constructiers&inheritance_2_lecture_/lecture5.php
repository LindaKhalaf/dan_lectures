<?php 
	class Human{
		public $age;
		public $gender;
		public $firstName;
		public $lastName;
		public $grade;
		public $school;
		function __construct($age, $gender, $firstName, $lastName, $grade, $school){
			$this->age = $age;
			$this->gender = $gender;
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->grade = $grade;
			$this->school = $school;
		}
		function getInfo(){
			return $this->firstName . " " . $this->lastName . " is a " . $this->age . " currently attending " . $this->school . ". ";
		}
	}
		class Linda extends Human {
			function __construct($age, $gender, $firstName, $lastName, $grade, $school, $height){
				parent:: __construct($age, $gender, $firstName, $lastName, $grade, $school);
				$this->height = $height;
			}
			function tall() {
				return $this->height;}
			}
		class Anna extends Human {
			function __construct($age, $gender, $firstName, $lastName, $grade, $school, $weight){
				parent:: __construct($age, $gender, $firstName, $lastName, $grade, $school);
				$this->weight = $weight;
			}
			function mass(){
				return $this->weight;}
		}

$linda = new Linda(15, "female", "Linda", "Khalaf", 10, "Pasadena High", true);
print "Human Number: 1-A is " . $linda->getInfo();
 ?>