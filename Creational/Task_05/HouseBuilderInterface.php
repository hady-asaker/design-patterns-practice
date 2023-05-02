<?php

namespace Creational\Builder\Task5;

interface HouseBuilderInterface
{
    public function buildHouse();
    public function floors();
    public function Basement();
    public function bedrooms();
    public function bathrooms();
    public function kitchens();
    public function garden();
    public function returnHouse();
}