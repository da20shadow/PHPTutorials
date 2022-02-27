<?php

class Validator
{
    private array $data = array();
    private array $rules = array();

    public function setData($params){
        //$data can looks like: ["Username" => "theUserName", "Password" => "qwertyPass"]
        $this->data = $params;
    }

    public function setRules($field,$type,$params){

        $this->rules[$field][] = array("type" => $type, "params" => $params);
        //The field is the key from $data "Username" & "Password"
    }

    public function validate(){
        echo "<pre>" . print_r($this->rules, true) . "</pre>";

        foreach ($this->rules as $key => $value) {

            foreach ($value as $rule) {

                //This replaces all if checks below
                $method = $rule['type'];
                $this->$method($key,$rule['params']);

//                if ($rule['type'] == 'min_length'){
//
//                    $this->min_length($key,$rule['params']);
//
//                }else if ($rule['type'] == 'max_length'){
//
//                    $this->max_length($key,$rule['params']);
//
//                }else if ($rule['type'] == 'password_min_length'){
//
//                    $this->password_min_length($key,$rule['params']);
//
//                }

                echo "<pre> The name of the rule is: " . print_r($key,true) . "</pre>";
                echo "<pre>" . print_r($rule,true) . "</pre>";

            }
            
        }
    }

    private function min_length($filed,$param): void
    {
        if (mb_strlen($this->data[$filed]) > $param){

            echo "<script> alert(`$filed` + ' min_length is OK') </script>";
            echo "<p style='color:green;'>$filed min length is OK!</p>";
        }else{
            echo "<script> alert(`$filed` + ' min_length is NOT OK') </script>";
            echo "<p style='color:darkred;'>$filed min length is NOT OK!</p>";
        }
    }

    private function max_length($filed,$param): void
    {
        if (mb_strlen($this->data[$filed]) < $param){

            echo "<script> alert(`$filed` + ' max_length is OK') </script>";
            echo "<p style='color:green;'>$filed max length is OK!</p>";

        }else{

            echo "<script> alert(`$filed` + ' max_length is NOT OK') </script>";
            echo "<p style='color:darkred;'>$filed max length is NOT OK too long!</p>";
        }
    }

    private function password_min_length($filed,$param): void
    {
        if (mb_strlen($this->data[$filed]) > $param){

            echo "<script> alert(`$filed` + ' min_length is OK') </script>";
            echo "<p style='color:green;'> $filed min length is OK!</p>";

        }else{

            echo "<script> alert(`$filed` + ' min_length is NOT OK too short password') </script>";
            echo "<p style='color:darkred;'>$filed min length is NOT OK too short!</p>";
        }
    }

}