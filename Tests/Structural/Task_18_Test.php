<?php

namespace Test;
require_once "./Structural/Task_18/SelectQueryBuilder.php";
require_once "./Structural/Task_18/InsertQueryBuilder.php";
require_once "./Structural/Task_18/UpdateQueryBuilder.php";
require_once "./Structural/Task_18/DeleteQueryBuilder.php";
use PHPUnit\Framework\TestCase;
use Structural\FluentBuilder\Task18\DeleteQueryBuilder;
use Structural\FluentBuilder\Task18\InsertQueryBuilder;
use Structural\FluentBuilder\Task18\SelectQueryBuilder;
use Structural\FluentBuilder\Task18\UpdateQueryBuilder;

class Task_18_Test extends TestCase
{
    public function testSelectQueryBuilder()
    {
        $Query = new SelectQueryBuilder();

        $Query->Select(["name, age"]);
        $Query->From("users");
        $Query->Where(["age < 30", "name = 'WTF'"]);

        $finalQuery = $Query->BuildQuery();
        $this->assertEquals("SELECT name, age FROM users WHERE age < 30 AND name = 'WTF'", $finalQuery);
    }
    public function testInsertQueryBuilder()
    {
        $Query = new InsertQueryBuilder();

        $Query->InsertInto("users", ["name", "age", "email"]);
        $Query->Values(["Hady", "21", "aerr@test.com"]);
        
        $finalQuery = $Query->BuildQuery();
        $this->assertEquals("INSERT INTO users (name, age, email) VALUES (Hady, 21, aerr@test.com)", $finalQuery);
    }
    public function testUpdateQueryBuilder()
    {
        $Query = new UpdateQueryBuilder();

        $Query->Update("users");
        $Query->set(["name = 'Ahmed'"]);
        $Query->Where(["name = 'ahmed'", "Country = 'Egypt'"]);
        
        $finalQuery = $Query->BuildQuery();
        $this->assertEquals("UPDATE users SET name = 'Ahmed' WHERE name = 'ahmed' AND Country = 'Egypt'", $finalQuery);
    }
    public function testDeleteQueryBuilder()
    {
        $Query = new DeleteQueryBuilder();

        $Query->DeleteFrom("users");
        $Query->Where(["name = 'Ahmed'", "age < 20"]);
        
        $finalQuery = $Query->BuildQuery();
        $this->assertEquals("DELETE FROM users WHERE name = 'Ahmed' AND age < 20", $finalQuery);
    }
}
