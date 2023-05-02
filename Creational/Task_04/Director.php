<?php

namespace Creational\AbstractFactory\Task4;
require_once "PizzaBuilder.php";

class PizzaDirector
{
    private $Director;

    public function __construct(PizzaBuilder $Director)
    {
        $this->Director = $Director;
    }

    public function ProducePizza() :Pizza
    {
        $this->Director->createPizza();
        $this->Director->PizzaSize();
        $this->Director->ToppingsPizza();
        $this->Director->CrustPizza();
        $this->Director->StuffingPizza();
        return $this->Director->GetPizza();
    }
}
$k = new PizzaBuilder();
$x = new PizzaDirector($k);
$x->ProducePizza();