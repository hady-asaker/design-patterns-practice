<?php

namespace Creational\Builder\Task4;
require_once "Pizza.php";

class PizzaBuilder
{
    /**
     * @var Pizza $pizaa;
     */

    private $pizza;

    public function CreatePizza()
    {
        $this->pizza = new Pizza();
    }

    public function PizzaSize()
    {
        $this->pizza->setter("Size", "Medium");
    }

    public function ToppingsPizza()
    {
        $this->pizza->setter("Topping", "Susis");
    }

    public function CrustPizza()
    {
        $this->pizza->setter("Crust", "cheese");
    }

    public function StuffingPizza()
    {
        $this->pizza->setter("Stuffing", "Meat");
    }

    public function GetPizza()
    {
        return $this->pizza;
    }
}

$test = new PizzaBuilder();

$test->CreatePizza();
$test->PizzaSize();
$test->ToppingsPizza();
$test->CrustPizza();
$test->StuffingPizza();
$myPizza = $test->GetPizza();

echo "<pre>";print_r($myPizza); echo "</pre>";