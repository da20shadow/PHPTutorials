<?php
include "iDecorator.php";
class Article implements iDecorator
{
    public function getTitle(): string
    {
        return "Article Title from database";
    }

    public function getContent(): string
    {
        return "Article Content from database. 
        That's why is little longer now.";
    }
}