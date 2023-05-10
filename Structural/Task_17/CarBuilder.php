<?php

namespace Structural\FluentBuilder\Task17;
require_once "Car.php";

class CarBuilder
{
    public $Car;

    public function __construct() 
    {
        $this->Car = new Car();
    }

    public function setMake($make)
    {
        return $this->Car->Make = $make;
    }
    public function setModel($model)
    {
        return $this->Car->Model = $model;
    }
    public function setEngine($engine)
    {
        return $this->Car->Engine = $engine;
    }
    public function setTransmission($transmission)
    {
        return $this->Car->Transmission = $transmission;
    }
    public function setColor($color)
    {
        return $this->Car->Color = $color;
    }
    public function Build()
    {
        return sprintf("You Make [ %s ] Car Its Model is [ %s ] And Its Engine is [ %s ] With Transmission [ %s ] And Color [ %s ]",
        $this->setMake($this->Car->Make),
        $this->setModel($this->Car->Model),
        $this->setEngine($this->Car->Engine),
        $this->setTransmission($this->Car->Transmission),
        $this->setColor($this->Car->Color));
    }
}

$car = new CarBuilder();
$car->setMake("Benz");
$car->setModel("C-180");
$car->setEngine("Aspirated-V8");
$car->setTransmission("9-Speed Automatic");
$car->setColor("White");

echo $car->Build();