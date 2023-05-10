<?php

namespace Structural\FluentBuilder\Task18;

class SelectQueryBuilder
{
    private $Columns = ["*"];
    private $Table;
    private $Conditions = [];

    public function Select(array $Columns)
    {
        $this->Columns = $Columns;
    }
    public function From($Table)
    {
        $this->Table = $Table;
    }
    public function Where(array $Conditions)
    {
        $this->Conditions = $Conditions;
    }
    public function BuildQuery() :string
    {
        return sprintf("SELECT %s FROM %s WHERE %s",
        implode(", ", $this->Columns),
        $this->Table,
        implode(" AND ", $this->Conditions)
        );
    }

}

$Query = new SelectQueryBuilder();

$Query->Select(["name, age"]);
$Query->From("users");
$Query->Where(["age < 30", "name LIKE %as"]);

echo $Query->BuildQuery();