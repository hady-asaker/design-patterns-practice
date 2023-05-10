<?php

namespace Structural\FluentBuilder\Task18;

class UpdateQueryBuilder
{
    private $Table;
    private $Values = [];
    private $Conditions = [];

    public function Update($Table)
    {
        $this->Table = $Table;
    }
    public function set($Values)
    {
        $this->Values = $Values;
    }
    public function Where($Conditions)
    {
        $this->Conditions = $Conditions;
    }
    public function BuildQuery() :string
    {
        return sprintf("UPDATE %s SET %s WHERE %s",
        $this->Table,
        implode(" AND ", $this->Values),
        implode(" AND ", $this->Conditions)
        );
    }

}

$Query = new UpdateQueryBuilder();

$Query->Update("users");
$Query->set(["name = 'Ahmed'"]);
$Query->Where(["name = 'ahmed'", "Country = 'Egypt'"]);

echo $Query->BuildQuery();