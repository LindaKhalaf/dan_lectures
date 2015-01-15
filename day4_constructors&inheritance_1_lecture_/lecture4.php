<?php
  class Human {
    public $dead = false;
    public $firstname;
    public $lastname;
    public $age;
           
    // Assigning the values
    public function __construct($firstname, $lastname, $age) {
     $this->firstname = $firstname;
     $this->lastname = $lastname;
     $this->age = $age;
    }
    public function heythere() {
      return "yo, my name is " . $this->firstname . " " . $this->lastname . ". aweseome to meet you. :3";
    }
  }
  $it = new Human('Linda', 'Khalaf', 15);

  echo $it->heythere();
?>