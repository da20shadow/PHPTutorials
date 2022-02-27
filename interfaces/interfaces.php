<?php
include ("MyPlugin.php");
include ("ClassThatExtendAbstractClass.php");

//Interface
$p = new MyPlugin();

$song = "In The Club - 50 Cent";

$p->play($song);

echo "<br>";

$p->pause($song);

echo "<br>";

//Plugin that extends abstract class
$coolPlugin = new ClassThatExtendAbstractClass();

$coolPlugin->getInfo();

echo "<br>";

// Check if coolPlugin extends abstract class
var_dump($coolPlugin instanceof AbstractPlugin);