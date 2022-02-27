<?php
class SingletonName {

    private static ?SingletonName $instance = null;

    //Create private instance!
    private function  __construct(){
    }
    //Creating new if is not created
    public static function getInstance(): ?SingletonName
    {
        if (self::$instance == null){
            self::$instance = new SingletonName();
        }
        return self::$instance;
    }
}