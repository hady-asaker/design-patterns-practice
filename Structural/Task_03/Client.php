<?php

namespace Structural\Bridge\Task3;

require_once "RedColor.php";
require_once "BlueColor.php";
require_once "GreenColor.php";
require_once "Circle.php";
require_once "Triangle.php";
require_once "Square.php";

class Client
{
    public $shape;

    public function __construct(ShapeInterface $shape) 
    {
        $this->shape = $shape;
    }

    public function applyColor(ColorInterface $color)
    {
        $this->shape->setColor($color);
    }

    public function ReturnShape()
    {
        return $this->shape->GetShape();
    }

}

$shape = new Circle();
$client = new Client($shape);
$color = new RedColor();
$client->applyColor($color);
echo $client->ReturnShape();

echo "<br>";

$shape = new Triangle();
$client = new Client($shape);
$color = new BlueColor();
$client->applyColor($color);
echo $client->ReturnShape();

echo "<br>";

$shape = new Square();
$client = new Client($shape);
echo $client->ReturnShape();
