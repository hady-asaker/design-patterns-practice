<?php

namespace Structural\DataMapper\Task10;
require_once "DataMapperInterface.php";

class DataMapper implements DataMapperInterface
{
    private $config;

    public function __construct() 
    {
        $this->config = new DBConnection();
        $this->config = $this->config->connect();
    }

    public function addProduct($name, $price)
    {
        $search = $this->config->prepare("SELECT * FROM products WHERE name = :name");
        $search->bindParam("name", $name);
        $search->execute();
        if ($search->rowCount() > 0) 
        {
            echo "Product [ " . $name . " ] already exists" . "<br>";
        }
        else 
        {   
            $addProduct = $this->config->prepare("INSERT INTO products(name, price) VALUES(:productName, :productPrice)");
            $addProduct->bindParam("productName", $name);
            $addProduct->bindParam("productPrice", $price);
    
            if ($addProduct->execute()) {
                echo "Product [ " . $name . " ] Added Successfully"  . "<br>";
            }
            else {
                echo "Error";
            }
        }
    }

    public function removeProduct($name)
    {
        $search = $this->config->prepare("SELECT * FROM products WHERE name = :name");
        $search->bindParam("name", $name);
        $search->execute();
        if ($search->rowCount() > 0) 
        {
            $removeProduct = $this->config->prepare("DELETE FROM products WHERE name = :productName");
            $removeProduct->bindParam("productName", $name);
    
            if ($removeProduct->execute()) {
                echo "Product [ " . $name . " ] Removed Successfully"  . "<br>";
            }
            else {
                echo "Error";
            }
        }
        else 
        {   
            echo "Product [ " . $name . " ] Not Found"  . "<br>";
        }
    }

    public function updateProduct($name, $newName, $newPrice)
    {
        $search = $this->config->prepare("SELECT * FROM products WHERE name = :name");
        $search->bindParam("name", $name);
        $search->execute();
        if ($search->rowCount() > 0) 
        {
            $UpdateProduct = $this->config->prepare("UPDATE products set name = :newName, price = newPrice");
            $UpdateProduct->bindParam("newName", $newName);
            $UpdateProduct->bindParam("newPrice", $newPrice);
    
            if ($UpdateProduct->execute()) {
                echo "Product [ " . $name . " ] Updated Successfully"  . "<br>";
            }
            else {
                echo "Error";
            }
        }
        else 
        {   
            echo "Product [ " . $name . " ] Not Found"  . "<br>";
        }
    }

    public function getProduct($name)
    {
        $search = $this->config->prepare("SELECT * FROM products WHERE name = :name");
        $search->bindParam("name", $name);
        $search->execute();
        $product = $search->fetchObject();

        if ($search->rowCount() > 0) 
        {
            echo "Product Found<br>";
            echo "ID: " . $product->id . "<br>";
            echo "Name: " . $product->name . "<br>";
            echo "Price: " . $product->price . "<br>";
        }
        else 
        {   
            echo "Product [ " . $name . " ] Not Found"  . "<br>";
        }
    }

}
