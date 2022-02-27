<?php
include ("_Animal.php");
class Rabbit extends Animal {


    public function __construct($name,$color,$weight,$age)
    {
        parent::__construct($name,$color,$weight);
        echo "Rabbit construct";
    }

    public function eat($food)
    {
        parent::eat($food);
        if ($food == "Carrot"){
            echo $this->getName() . " is eating " . $food . " nam nam nam";
        }else{
            echo "I do not eat " . $food;
        }
    }
}