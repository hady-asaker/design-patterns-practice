# Task 08

Implement a Company Hierarchy using the Composite Pattern

Suppose you need to implement a Company Hierarchy, where each Employee can have multiple subordinates, and each Employee can be a Manager or a RegularEmployee. You can use the Composite Pattern to represent this hierarchy.

## Steps

1- Identify the Component:

* In this case, the Component is the Employee interface, which should define the methods that both Managers and RegularEmployees share, like getName(), getSalary(), and addChild().

2- Implement the Leaf:

* The Leaf represents the individual RegularEmployee. In this case, you can create a RegularEmployee class that implements the Employee interface.

3- Implement the Composite:

* The Composite represents the Manager. In this case, you can create a Manager class that implements the Employee interface and has an array of child Employees (RegularEmployees and Managers). 
* This class should have methods like addChild(), removeChild(), and getChildren() to manipulate the list of children.

4- Test the Composite:

* Create some Managers and RegularEmployees, add them to other Managers or to the Company, and then print their names and salaries. 
* You should be able to traverse the entire hierarchy without knowing whether you are dealing with a Manager or a RegularEmployee.

