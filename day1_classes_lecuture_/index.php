<?php  

	//creates class
	class Sup {
		public $firstName = "nien";//no first name, "nien" means no in sweedish I think....
		public $gender = "nien";//^^^look above. :3
		public $price = 0;//there is no price for this, why would there be a pice for this?
		function getName() {//grabbing the "firstName" 
			return "{$this->firstName}";
		}
	}
	$sup1 = new sup();//this recalls sup
	$sup1->firstName = "Sup";//this remakes sup
	print "(1){$sup1->getName()}.";//this will say "Sup."

	//creates class
	class Food {
		public $apple_f00d = "red";//apples es red
		public $pencil = "nien";//no pencil,pencil not food, "nien" means no in sweedish I think....
		public $price = 2.99;//2.99 dolla apple
		function getf00d() {//grabbing the "f00d" 
			return "{$this->apple_f00d}";
		}
		function getf00ds() {//grabbing the "f00ds"
			return "{$this->price}";
		}
	}
	$food1 = new food();//this recalls food
	$food1->apple = "is red";//this remakes apple
	print " (2) An apple is {$food1->getf00d()} and costs " . "{$food1->getf00ds()}";//this will say "An apple is red and costs 2.99"

	//creates class
	class cat {
		public $firstName = "pico";//"firstName" is created
		public $gender = "boy";//this identifies the "gender"
		public $price = 0;//there is no "price" for this, why would there be a "price" for this? I mean seriously
		function getName() {// a function grabbing the "firstName" 
			return "{$this->firstName}";
		}
	}
	$cat1 = new cat();//this recalls the class cat
	$cat1->firstName = "pico";//this rewrites the varriable "firstName"
	print " (3) My cat's name is {$cat1->getName()}.";//this will say "My cat's name is pico"

?>
