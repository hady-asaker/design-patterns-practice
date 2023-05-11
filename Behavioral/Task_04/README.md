# Task 04

Implement a text editor with editing operations

In this task, you will implement a text editor with various editing operations using the Command pattern. The text editor will allow users to perform actions such as inserting text, deleting text, and formatting text, and these actions will be encapsulated as commands.


## Steps

1- Define the Command interface:

* Define an interface that declares methods such as execute(), undo(), and redo(). 
* These methods will be implemented by concrete command classes.

2- Implement concrete Command classes:

* Implement concrete command classes that encapsulate the editing operations to be performed on the text. Each command should have its own execute(), undo(), and redo() methods that define the specific behavior.

3- Create the TextEditor:

* Create a TextEditor object that will handle user input and manage the execution of commands. 
* The TextEditor should have methods to set the current command, execute the command, undo the last command, and redo the last undone command.

4- Associate commands with user actions:

* Associate specific command objects with user actions such as inserting text, deleting text, formatting text, etc. 
* For example, you may associate an InsertCommand with the action of inserting text, a DeleteCommand with the action of deleting text, and a FormatCommand with the action of formatting text.

5- Execute commands:

* When a user performs an action, set the corresponding command as the current command in the TextEditor and execute it. 
* The command will carry out the necessary editing operation on the text.

6- Perform undo and redo operations:

* When the user wants to undo or redo an editing operation, call the respective methods in the TextEditor. 
* The TextEditor should manage the command history and invoke the undo() or redo() methods of the appropriate command.
