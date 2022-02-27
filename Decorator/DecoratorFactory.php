
<?php

class DecoratorFactory
{
    private function __constructor(){

    }
    public static function select($type,$object){
        //Друг готин начин е:
        $auto = ucfirst(strtolower($type)) . "Decorator";
        return new $auto($object);

//        if ($type == "html"){
//            return new HtmlDecorator($object);
//        }else if ($type == "pdf"){
//            return new PdfDecorator($object);
//        }
    }
}