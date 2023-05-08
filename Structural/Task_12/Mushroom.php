<?php

namespace Structural\Decorator\Task12;
require_once "PizzaComponentInterface.php";
require_once "PlainPizza.php";
require_once "Cheese.php";

class Mushroom implements PizzaComponentInterface
{
    private $component;

    public function __construct(PizzaComponentInterface $component) 
    {
        $this->component = $component;
    }

    public function getCost()
    {
        return $this->component->getCost() + 10;
    }
    public function getDescription()
    {
        return $this->component->getDescription() . ', Mushroom';
    }

}

// $pizza = new PlainPizza();
// $Mushroom = new Mushroom($pizza);
// echo $Mushroom->getDescription();
// echo "<br>";
// echo $Mushroom->getCost();

// $Cheese = new Cheese($Mushroom);
// echo $Cheese->getDescription();
// echo "<br>";
// echo $Cheese->getCost();
