<?php
include ("iPlugin.php");
class MyPlugin implements iPlugin {

    public function play($stream)
    {
        // TODO: Implement play() method.
        echo $stream . " Playing";
    }
    public function pause($stream)
    {
        // TODO: Implement pause() method.
        echo $stream . " Paused";
    }
}