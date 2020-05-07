<?php
    class Person{
        public $name;
        private $age;
        protected $citizenship;

        function __construct($name = ""){
            echo "This is Person class";
            $this->name = $name; 
        }

        function printName(){
            echo $this->name;
        }

        // trait functions(){
        //     function printFive(){
        //         echo 5;
        //     }
    
        //     function printFive(){
        //         echo "five";
        //     }
        // }
    
    }

    
 ?>