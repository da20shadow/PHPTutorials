<?php
abstract class AbstractPlugin {

    public function play(){
        echo "Play";
    }
    abstract public function getInfo();
}