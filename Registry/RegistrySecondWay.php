<?php

class RegistrySecondWay
{
    private array $data = Array();

    public function __set($name,$value){
        $this->data[$name] = $value;
    }

    public function __get($name){
        return $this->data[$name];
    }
}