<?php

namespace Test;
require_once "./Behavioral/Task_19/SortingAlgorithm.php";

use Behavioral\Strategy\Task19\BubbleSortStrategy;
use Behavioral\Strategy\Task19\MergeSortStrategy;
use Behavioral\Strategy\Task19\QuickSortStrategy;
use Behavioral\Strategy\Task19\SortingAlgorithm;
use PHPUnit\Framework\TestCase;

class Task_19_Test extends TestCase
{
    public function testBubbleSort()
    {
        $test = new SortingAlgorithm();
        $Bubble = new BubbleSortStrategy();

        $test->setSortStrategy($Bubble);
        $sortedArray = $test->sort([3, 2, 8, 4, 1, 6, 5, 7, 9, 0]);

        $this->assertEquals([0, 1, 2, 3, 4, 5, 6, 7, 8, 9], $sortedArray);
    }

    public function testMergeSort()
    {
        $test = new SortingAlgorithm();
        $Merge = new MergeSortStrategy();


        $test->setSortStrategy($Merge);
        $sortedArray = $test->sort([3, 2, 8, 4, 1, 6, 5, 7, 9, 0]);

        $this->assertEquals([0, 1, 2, 3, 4, 5, 6, 7, 8, 9], $sortedArray);
    }

    public function testQuickSort()
    {
        $test = new SortingAlgorithm();
        $Quick = new QuickSortStrategy();

        $test->setSortStrategy($Quick);
        $sortedArray = $test->sort([3, 2, 8, 4, 1, 6, 5, 7, 9, 0]);

        $this->assertEquals([0, 1, 2, 3, 4, 5, 6, 7, 8, 9], $sortedArray);
    }

}
