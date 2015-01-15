<?php  
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
		public $apple_f00d;
		public $pencil;
		public $price;
		function __construct($apple_f00d, $pencil, $price) {
			$this->apple_f00d = $apple_f00d;
			$this->pencil = $pencil;
			$this->price = $price;
		}
		function getName() {
			return "{$this->apple_f00d}" .
			"{$this->pencil}";
		}
	}
//example 3
	class Sup {
		public $firstName;
		function __construct($firstName) {
			$this->firstName = $firstName;
		}
		function getName() {
			return "{$this->firstName}";
		}
	}

	 $it = new Sup('Linda');

  echo $it->getName();
?>
