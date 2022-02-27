<?php
include ("_Dog.php");
class Wolf extends Dog {
    //Overriding the function bark
    public function bark()
    {
        echo "Calling " . $this->getName() . " to bark and get: Auuuuu";
    }
}