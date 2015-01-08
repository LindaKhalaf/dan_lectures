<?php  
//Lecture 1
//______________________________________________________________________________________________________
//example 1
	class Sup {
		public $firstName = "nien";
		function getName() {
			return "{$this->firstName}";
		}
	}
	$sup1 = new sup();
	$sup1->firstName = "Sup";
	print "(1){$sup1->getName()}.";

	//example 2
	class Food {
		public $apple_f00d = "red";
		public $pencil = "nien";
		public $price = 2.99;
		function getf00d() {
			return "{$this->apple_f00d}";
		}
		function getf00ds() {
			return "{$this->price}";
		}
	}
	$food1 = new food();
	$food1->apple = "is red";
	print " (2) An apple is {$food1->getf00d()} and costs " . "{$food1->getf00ds()}";

//example 2
	class cat {
		public $firstName = "pico";
		public $gender = "boy";
		public $price = 0;
		function getName() {
			return "{$this->firstName}";
		}
	}
	$cat1 = new cat();
	$cat1->firstName = "pico";
	print " (3) My cat's name is {$cat1->getName()}.";
//_________________________________________________________________________________________________________
//lecture 2
//example 1
	class cat {
		public $firstName;
		public $gender;
		public $price;
		function __construct($firstName, $gender, $price) {
			$this->firstName = $firstName;
			$this->gender = $gender;
			$this->price = $price;
		}
		function getName() {
			return "{$this->firstName}";
		}
	}
//EXAMPLE 2
	class Food {
		public $apple_f00d;
		public $pencil;
		public $price;
		function __construct($apple_f00d, $pencil, $price) {
			$this->apple_f00d = $apple_f00d;
			$this->pencil = $pencil;
			$this->price = $price;
		}
		function getName() {
			return "{$this->apple_f00d}" .
			"{$this->pencil}";
		}
	}
//example 3
	class Sup {
		public $firstName;
		function __construct($firstName) {
			$this->firstName = $firstName;
		}
		function getName() {
			return "{$this->firstName}";
		}
	}
?>
