<?php

namespace Behavioral\Observer\Task12;
require_once "SubjectInterface.php";
require_once "TemperatureDisplay.php";
require_once "HumidityDisplay.php";
require_once "PressureDisplay.php";

class WeatherStation implements SubjectInterface
{
    private $Observers = [];
    private float $Temperature;
    private float $Humidity;
    private float $Pressure;

    public function Register(ObserverInterface $Observer)
    {
        $index = array_search($Observer, $this->Observers);
        if ($index === false) {
            $this->Observers[] = $Observer;
        }
        else { echo "Observer Exist"; }
    }

    public function Remove(ObserverInterface $Observer)
    {
        $index = array_search($Observer, $this->Observers);
        if ($index !== false) {
            unset($this->Observers[$index]);
        }
        else { echo "Not Found"; }
    }

    public function Notify()
    {
        foreach ($this->Observers as $Observer) 
        {
            $Observer->update($this);
        }
    }

    public function change(float $Temperature, float $Humidity, float $Pressure)
    {
        $this->Temperature = $Temperature;
        $this->Humidity = $Humidity;
        $this->Pressure = $Pressure;
        $this->Notify();
    }

    public function getTemperature()
    {
        return $this->Temperature;
    }

    public function getHumidity()
    {
        return $this->Humidity;
    }

    public function getPressure()
    {
        return $this->Pressure;
    }
}

$test = new WeatherStation();

$Temperature = new TemperatureDisplay();
$Humidity = new HumidityDisplay();
$Pressure = new PressureDisplay();

$test->Register($Temperature);
$test->Register($Humidity);
$test->Register($Pressure);

// $test->Remove($Pressure);

$test->change(30.5, 10, 9);

echo $Temperature->getState() . "<br>";
echo $Humidity->getState() . "<br>";
echo $Pressure->getState() . "<br>";