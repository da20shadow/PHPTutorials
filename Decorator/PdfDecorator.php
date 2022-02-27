<?php

class PdfDecorator
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
        return "<h1> PDF" . $this->object->getTitle() . "</h1>";
    }
    public function getFormattedContentOutput(): string
    {
        return "<p> PDF" . $this->object->getContent();
    }
}