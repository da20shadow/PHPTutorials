<?php

class Registry
{
    private static array $data = Array();

    //Декларирането на празна private празна инстанция гарантира, че
    //Никой няма да може да направи инстнция на класа!
    private function __constructor(){

    }

    public static function setData($key,$val){
        self::$data[$key] = $val;
    }
    public static function getData($key){
        return self::$data[$key];
    }
}