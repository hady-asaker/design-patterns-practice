<?php

namespace Structural\Decorator\Task12;
require_once "PizzaComponentInterface.php";

class Cheese implements PizzaComponentInterface
{
    private $component;

    public function __construct(PizzaComponentInterface $component) 
    {
        $this->component = $component;
    }

    public function getCost()
    {
        return $this->component->getCost() + 5;
    }
    public function getDescription()
    {
        return $this->component->getDescription() . ', Cheese';
    }

}
