<?php

namespace Behavioral\Strategy\Task19;
require_once "SortStrategyInterface.php";

class MergeSortStrategy implements SortStrategyInterface 
{
    public function sort(array $array): array
    {
        if (count($array) <= 1)
        {
            return $array;
        }
        
        $middle = floor(count($array) / 2);
        $left = array_slice($array, 0, $middle);
        $right = array_slice($array, $middle);
        
        $left = $this->sort($left);
        $right = $this->sort($right);
        
        return $this->merge($left, $right);
    }
    
    private function merge(array $left, array $right): array
    {
        $result = [];
        $i = 0;
        $j = 0;
        
        while ($i < count($left) && $j < count($right))
        {
            if ($left[$i] <= $right[$j])
            {
                $result[] = $left[$i];
                $i++;
            }
            else {
                $result[] = $right[$j];
                $j++;
            }
        }
        
        while ($i < count($left))
        {
            $result[] = $left[$i];
            $i++;
        }
        
        while ($j < count($right))
        {
            $result[] = $right[$j];
            $j++;
        }
        
        return $result;
    }
}
