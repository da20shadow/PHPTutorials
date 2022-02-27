<?php
include "Registry.php";
include "RegistrySecondWay.php";

Registry::setData("Name","Mehmed");
echo Registry::getData("Name");

echo "<br>";

// Using magic method
$person = new RegistrySecondWay();
$person->Name ="Mehmed";

echo $person->Name;