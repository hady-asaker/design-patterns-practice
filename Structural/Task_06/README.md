# Task 06

Implement a File System using the Composite Pattern.

Imagine you need to implement a File System where you have two types of elements: Files and Folders. Both of them should have a common interface so they can be treated the same way. You can use the Composite Pattern to achieve this.


## Steps

1- Identify the Component:

* In this case, the Component is the File/Folder interface, which should define the methods that both files and folders share, like getName(), getSize(), and getCreationDate().

2- Implement the Leaf:

* The Leaf represents the individual file. In this case, you can create a File class that implements the Component interface.

3- Implement the Composite:

* The Composite represents the Folder. In this case, you can create a Folder class that implements the Component interface and has an array of child Components (Files and Folders).
* This class should have methods like addChild(), removeChild(), and getChildren() to manipulate the list of children.

4- Test the Composite:

* Create some Files and Folders, add them to a folder, and then print their names, sizes, and creation dates. 
* You should be able to traverse the entire file system without knowing whether you are dealing with a file or a folder.