<?php
include "User.php";

$name = "Mehmed";
$age = 27;

$person = null;

try {

    $person = new User($name,$age);

}catch (Exception $e){
    echo $e->getMessage();
}
//serializing object to string
echo "Serialized object: <br>";
$secondPerson = serialize($person);
echo $secondPerson;

echo "<br>";
echo "<br>";

//Unserializing object and save it in new variable:
echo "Unserializing Object: <br>";
$newPerson = unserialize($secondPerson);
echo $newPerson->getName();