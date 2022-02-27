<?php
include ("_Animal.php");
class Dog extends Animal {

    public function bark(){
        echo "Calling " . $this->getName() . " to bark and get: Bow Bow Bow";
    }

    public function eat($food)
    {
        if ($food == "Meet"){
            echo $this->getName() . " is eating " . $food . " nam nam nam";
        }else{
            echo $this->getName() . " do not eat " . $food;
        }
    }
}