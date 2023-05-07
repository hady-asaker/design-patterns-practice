# Task 07

Implement a Menu System using the Composite Pattern

Suppose you need to implement a Menu System with several levels of depth, where each level can have multiple options or submenus. You can use the Composite Pattern to represent this hierarchy.


## Steps

1- Identify the Component:

* In this case, the Component is the MenuItem interface, which should define the methods that both MenuItems and Menus share, like getName(), getUrl(), and addChild().

2- Implement the Leaf:

* The Leaf represents the individual MenuItem. In this case, you can create a MenuItem class that implements the Component interface.

3- Implement the Composite:

* The Composite represents the Menu. In this case, you can create a Menu class that implements the Component interface and has an array of child Components (MenuItems and Menus). 
* This class should have methods like addChild(), removeChild(), and getChildren() to manipulate the list of children.

4- Test the Composite:

* Create some Menus with several levels of depth, add some MenuItems to them, and then print their names and urls. 
* You should be able to traverse the entire menu hierarchy without knowing whether you are dealing with a MenuItem or a Menu.