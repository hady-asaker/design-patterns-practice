# Task 19

Implement a sorting algorithm using the Strategy pattern.

In this task, you will implement a sorting algorithm using the Strategy pattern. The sorting algorithm will have different strategies representing different sorting techniques, such as bubble sort, merge sort, and quicksort.


## Steps

1- Define the SortStrategy interface:

* Create a SortStrategy interface that declares a method for sorting an array.
* This interface will serve as the contract for all sorting strategies.

2- Implement concrete SortStrategy classes:

* Implement concrete classes that represent different sorting strategies.
* For example, you can create a BubbleSortStrategy for bubble sort, a MergeSortStrategy for merge sort, and a QuickSortStrategy for quicksort.
* Each class should implement the SortStrategy interface and provide its own sorting logic.

3- Create the SortingAlgorithm class:

* Create a SortingAlgorithm class that encapsulates the sorting algorithm.
* This class will have a reference to the current sorting strategy and provide a method for executing the sorting strategy.

4- Set the sorting strategy:

* Provide a method in the SortingAlgorithm class to set the sorting strategy.
* This method will allow the client code to choose the desired sorting strategy dynamically.

5- Execute the sorting algorithm:

* Implement a method in the SortingAlgorithm class to execute the sorting algorithm.
* This method will call the sort() method of the currently set sorting strategy.
* It will perform the sorting operation on the provided array using the chosen sorting strategy.
