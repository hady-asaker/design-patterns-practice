<?php

namespace Behavioral\Strategy\Task19;
require_once "BubbleSortStrategy.php";
require_once "MergeSortStrategy.php";
require_once "QuickSortStrategy.php";

class SortingAlgorithm
{
    private SortStrategyInterface $sortStrategy;
    private array $array = [];

    public function setSortStrategy(SortStrategyInterface $sortStrategy)
    {
        $this->sortStrategy = $sortStrategy;
    }

    public function sort(array $array)
    {
        return $this->sortStrategy->sort($array);
    }

}

$test = new SortingAlgorithm();

$Bubble = new BubbleSortStrategy();
$Merge = new MergeSortStrategy();
$Quick = new QuickSortStrategy();

$test->setSortStrategy($Bubble);
$sortedArray = $test->sort([3, 2, 8, 4, 1, 6, 5, 7, 9, 0]);
echo '<pre>'; print_r($sortedArray); echo'</pre>';

$test->setSortStrategy($Merge);
$sortedArray = $test->sort([3, 2, 8, 4, 1, 6, 5, 7, 9, 0]);
echo '<pre>'; print_r($sortedArray); echo'</pre>';

$test->setSortStrategy($Quick);
$sortedArray = $test->sort([3, 2, 8, 4, 1, 6, 5, 7, 9, 0]);
echo '<pre>'; print_r($sortedArray); echo'</pre>';
