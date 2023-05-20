<?php

namespace Behavioral\Strategy\Task19;
require_once "SortStrategyInterface.php";

class BubbleSortStrategy implements SortStrategyInterface
{
    public function sort(array $array): array
    {
        $length = count($array);
        for ($i = 0; $i < $length - 1; $i++)
        {
            for ($j = 0; $j < $length - 1 - $i; $j++)
            {
                if ($array[$j] > $array[$j + 1])
                {
                    $tmp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $tmp;
                }
            }
        }
        return $array;
    }

}
