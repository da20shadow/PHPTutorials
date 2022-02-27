<?php

class HtmlDecorator
{
    private object $object;

    public function __construct($object)
    {
        if ($object instanceof iDecorator){
            $this->object = $object;
        }
    }
    public function getFormattedTitleOutput(): string
    {
        return "<h1>" . $this->object->getTitle() . "</h1>";
    }
    public function getFormattedContentOutput(): string
    {
        return "<p>" . $this->object->getContent();
    }
}