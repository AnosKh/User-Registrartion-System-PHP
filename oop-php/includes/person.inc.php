<?php 
    class Person{
        public $first = "H"; 
        private $last = "Kimhab"; 
        private $age = 28; 
    }

    class Pet extends Person {
        public function owner() {
            // get from $first 
            $name =  $this->first; 
            return $name; 
        }
    }
?>