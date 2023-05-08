<?php

namespace Structural\DataMapper\Task10;

interface DataMapperInterface
{
    public function addProduct($name, $price);
    public function removeProduct($name);
    public function updateProduct($name, $newName, $newPrice);
    public function getProduct($name);
}
