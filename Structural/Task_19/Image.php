<?php

namespace Structural\Proxy\Task19;
require_once "ImageInterface.php";

class Image implements ImageInterface
{
    protected $image;

    public function loadImage($image)
    {
        $this->image = $image;
    }
    public function displayImage()
    {
        return "Displaying Image " . $this->image;
    }

}
