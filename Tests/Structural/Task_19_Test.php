<?php

namespace Test;
require_once "./Structural/Task_19/VirtualProxy.php";
use PHPUnit\Framework\TestCase;
use Structural\Proxy\Task19\VirtualProxy;

class Task_19_Test extends TestCase
{
    public function testCanDisplayImageFromProxy()
    {
        $proxy = new VirtualProxy();
        $proxy->loadImage("test.jpg");
        $display = $proxy->displayImage();

        $this->assertEquals("Displaying Image test.jpg", $display);
    }
    public function testCanResizeImage()
    {
        $proxy = new VirtualProxy();
        $proxy->loadImage("test.jpg");
        $resize = $proxy->resizeImage();         // Can Display or not

        $this->assertEquals("Resize The Original Image test.jpg", $resize);

    }
    public function testCanCropImage()
    {
        $proxy = new VirtualProxy();
        $proxy->loadImage("test.jpg");
        // $proxy->displayImage();
        $crop = $proxy->cropImage();       // Can Display or not

        $this->assertEquals("Crop The Original Image test.jpg", $crop);
    }
    public function testCanZoomInImage()
    {
        $proxy = new VirtualProxy();
        $proxy->loadImage("test.jpg");
        $proxy->displayImage();
        $ZoomIn = $proxy->zoomIn();       // Should display first

        $this->assertEquals("zoomIn The Loaded Image test.jpg", $ZoomIn);
    }
    public function testCanZoomOutImage()
    {
        $proxy = new VirtualProxy();
        $proxy->loadImage("test.jpg");
        $proxy->displayImage();
        $ZoomOut = $proxy->zoomOut();       // Should display first

        $this->assertEquals("zoomOut The Loaded Image test.jpg", $ZoomOut);

    }
    public function testCanScrollUpImage()
    {
        $proxy = new VirtualProxy();
        $proxy->loadImage("test.jpg");
        $proxy->displayImage();
        $scrollUp = $proxy->scrollUp();         // Should display first

        $this->assertEquals("scrollUp The Loaded Image test.jpg", $scrollUp);
    }
    public function testCanScrollDownImage()
    {
        $proxy = new VirtualProxy();
        $proxy->loadImage("test.jpg");
        $proxy->displayImage();
        $scrollDown = $proxy->scrollDown();     // Should display first

        $this->assertEquals("scrollDown The Loaded Image test.jpg", $scrollDown);
    }
    public function testCanScrollRightImage()
    {
        $proxy = new VirtualProxy();
        $proxy->loadImage("test.jpg");
        $proxy->displayImage();
        $scrollRight = $proxy->scrollRight();       // Should display first

        $this->assertEquals("scrollRight The Loaded Image test.jpg", $scrollRight);
    }
    public function testCanScrollLeftImage()
    {
        $proxy = new VirtualProxy();
        $proxy->loadImage("test.jpg");
        $proxy->displayImage();
        $ScrollLeft = $proxy->ScrollLeft();       // Should display first

        $this->assertEquals("scrollLeft The Loaded Image test.jpg", $ScrollLeft);
    }
}
