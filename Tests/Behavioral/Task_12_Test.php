<?php

namespace Test;
require_once "./Behavioral/Task_12/WeatherStation.php";

use Behavioral\Observer\Task12\HumidityDisplay;
use Behavioral\Observer\Task12\PressureDisplay;
use Behavioral\Observer\Task12\TemperatureDisplay;
use Behavioral\Observer\Task12\WeatherStation;
use PHPUnit\Framework\TestCase;

class Task_12_Test extends TestCase
{
    public function testWeatherStation()
    {
        $test = new WeatherStation();

        $Temperature = new TemperatureDisplay();
        $Humidity = new HumidityDisplay();
        $Pressure = new PressureDisplay();

        $test->Register($Temperature);
        $test->Register($Humidity);
        $test->Register($Pressure);

        $test->change(30.5, 10, 9);

        $TemperatureState =  $Temperature->getState();
        $HumidityState =  $Humidity->getState();
        $PressureState =  $Pressure->getState();

        $this->assertEquals("The Temperature Updated To 30.5", $TemperatureState);
        $this->assertEquals("The Humidity Updated To 10", $HumidityState);
        $this->assertEquals("The Pressure Updated To 9", $PressureState);
    }
}
