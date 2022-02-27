<?php

class UserModel
{
    public function register($name,$email){
        if (mb_strlen($name) > 5){

        }else {
            throw new Exception("The name is too short",9);
//            throw new MyException("The name is too short",9);
        }
        return true;
    }
}
//class MyException extends Exception
//{
//    public function myEx(){
//        echo "My Exception";
//    }
//}