<?php
include "UserModel.php";

$user = new UserModel();
try{
    $result = $user->register("Meti","Syuleyman");
}catch (MyException $e){
//    echo $e->getMessage();
//    echo $e->getLine();
//    echo $e->getFile();
    echo $e->myEx();
}
