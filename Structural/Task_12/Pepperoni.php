<?php

namespace Structural\Decorator\Task12;
require_once "PizzaComponentInterface.php";

class Pepperoni implements PizzaComponentInterface
{
    public $component;

    public function __construct(PizzaComponentInterface $component) 
    {
        $this->component = $component;
    }

    public function getCost()
    {
        return $this->component->getCost() + 8;
    }
    public function getDescription()
    {
        return $this->component->getDescription() . ', Pepperoni';
    }

}
