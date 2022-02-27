<?php
include "Validator.php";

$toValidate = new Validator();
$toValidate->setData(array("Username"=>"Mehmed","Password"=>"qwerty123"));

//setting the rules
$toValidate->setRules("Username", "min_length",4);
$toValidate->setRules("Username", "max_length",8);
$toValidate->setRules("Password", "password_min_length",8);

//validating
$toValidate->validate();