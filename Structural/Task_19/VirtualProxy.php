<?php

namespace Structural\Proxy\Task19;
require_once "ImageInterface.php";
require_once "Image.php";

class VirtualProxy extends Image implements ImageInterface 
{
    public $memory = [];
    
    public function displayImage()
    {
        if (isset($this->image)) 
        {
            $this->memory[] = $this->image;
            return "Displaying Image " . $this->memory[0];
        }
        else {
            return "You Should Load Image First";
        }
    }

    public function cropImage()
    {
        return "Crop The Original Image " . $this->image;
    }
    public function resizeImage()
    {
        return "Resize The Original Image " . $this->image;
    }
    public function zoomIn()
    {
        if(isset($this->memory[0]))
        {
            return "zoomIn The Loaded Image " . $this->memory[0];
        }
        else {
            return "You Should Display The Image first";
        }
    }
    public function zoomOut()
    {
        if(isset($this->memory[0]))
        {
            return "zoomOut The Loaded Image " . $this->memory[0];
        }
        else {
            return "You Should Display The Image first";
        }
    }
    public function scrollUp()
    {
        if(isset($this->memory[0]))
        {
            return "scrollUp The Loaded Image " . $this->memory[0];
        }
        else {
            return "You Should Display The Image first";
        }
    }
    public function scrollDown()
    {
        if(isset($this->memory[0]))
        {
            return "scrollDown The Loaded Image " . $this->memory[0];
        }
        else {
            return "You Should Display The Image first";
        }
    }
    public function scrollLeft()
    {
        if(isset($this->memory[0]))
        {
            return "scrollLeft The Loaded Image " . $this->memory[0];
        }
        else {
            return "You Should Display The Image first";
        }
    }
    public function scrollRight()
    {
        if(isset($this->memory[0]))
        {
            return "scrollRight The Loaded Image " . $this->memory[0];
        }
        else {
            return "You Should Display The Image first";
        }
    }

}

$proxy = new VirtualProxy();
$proxy->loadImage("12.jpg");
echo $proxy->displayImage();     // Display

echo $proxy->resizeImage() . "<br>";        // resize original image
echo $proxy->cropImage() . "<br>";          // crop original image

echo $proxy->zoomIn() . "<br>";      // zoomIn     The displayed image
echo $proxy->scrollDown() . "<br>";  // scrollDown The displayed image

echo "<pre>"; print_r($proxy->memory); echo "</pre>";