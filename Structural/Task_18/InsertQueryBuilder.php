<?php

namespace Structural\FluentBuilder\Task18;

class InsertQueryBuilder
{
    private $Columns = [];
    private $Table;
    private $Values = [];

    public function InsertInto($Table, array $Columns)
    {
        $this->Table = $Table;
        $this->Columns = $Columns;
    }
    public function Values($Values)
    {
        $this->Values = $Values;
    }
    public function BuildQuery() :string
    {
        return sprintf("INSERT INTO %s (%s) VALUES (%s)",
        $this->Table,
        implode(", ", $this->Columns),
        implode(", ", $this->Values)
        );
    }

}

$Query = new InsertQueryBuilder();

$Query->InsertInto("users", ["name", "age", "email"]);
$Query->Values(["Hady", "21", "aerr@test.com"]);

echo $Query->BuildQuery();