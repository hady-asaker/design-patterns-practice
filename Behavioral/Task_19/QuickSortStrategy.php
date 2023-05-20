<?php

namespace Behavioral\Strategy\Task19;
require_once "SortStrategyInterface.php";

class QuickSortStrategy implements SortStrategyInterface
{
    public function sort(array $array): array
    {
        if (count($array) <= 1)
        {
            return $array;
        }
        
        $pivot = $array[0];
        $left = $right = [];
        
        for ($i = 1; $i < count($array); $i++)
        {
            if ($array[$i] < $pivot)
            {
                $left[] = $array[$i];
            } 
            else {
                $right[] = $array[$i];
            }
        }
        
        return array_merge(
            $this->sort($left),
            [$pivot],
            $this->sort($right)
        );
    }

}
