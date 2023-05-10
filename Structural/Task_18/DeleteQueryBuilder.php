<?php

namespace Structural\FluentBuilder\Task18;

class DeleteQueryBuilder
{
    private $Table;
    private $Conditions = [];

    public function DeleteFrom($Table)
    {
        $this->Table = $Table;
    }
    public function Where($Conditions)
    {
        $this->Conditions = $Conditions;
    }
    public function BuildQuery() :string
    {
        return sprintf("DELETE FROM %s WHERE %s",
        $this->Table,
        implode(" AND ", $this->Conditions)
        );
    }

}

$Query = new DeleteQueryBuilder();

$Query->DeleteFrom("users");
$Query->Where(["name = 'Ahmed'", "age < 20"]);

echo $Query->BuildQuery();