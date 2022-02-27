<?php
/*
 * Short description about the project
 * And how this class is connected with it
 */

/**
 * Description of the Doc
 *
 * @author Mehmed Syuleyman
 *
 * Documentation is very helpful and must be short and clear ease to understand!
 */
class Doc {
    /**
     * This is just test method that show a string
     * @param String the name
     * @param int the age
     */
    public function test(string $name, int $age){
        echo "The name is " . $name . " and is " . $age . " years old.";
    }
}