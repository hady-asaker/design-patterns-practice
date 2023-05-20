# Task 22

### Implement a workflow engine with customizable workflow steps using the Template pattern.

You have been assigned to develop a workflow engine that can execute customizable workflow steps. The engine should allow users to define their own workflows by adding and arranging different steps, such as validation, processing, and completion, according to their specific business needs. The Template pattern will be used to provide a framework for executing the workflow while allowing customization in individual steps.


## Steps

1- Define the WorkflowStep class:

* Create a WorkflowStep class that serves as the base step for a workflow.
* This class should define a template method called execute() that encapsulates the overall execution process of the step.
* The template method will provide a consistent structure for executing workflow steps but leave certain actions as abstract methods to be implemented by subclasses.

2- Implement concrete WorkflowStep subclasses:

* Implement concrete subclasses of WorkflowStep, each representing a specific step in the workflow.
* For example, you can create a ValidationStep, ProcessingStep, and CompletionStep.
* Each subclass should override the abstract methods defined in the base class to provide the specific implementation for that step.
* The abstract methods can represent customizable actions such as data validation, data processing, and finalization.

3- Create the WorkflowEngine class:

* Create a WorkflowEngine class that serves as the client code for executing the workflow.
* This class will have a list of workflow steps and provide a method for executing the workflow.

4- Add workflow steps:

* Provide a method in the WorkflowEngine class to add workflow steps.
* This method will allow the client code to customize the workflow by adding the desired steps in the desired order.
* It should add the specified workflow step to the list of steps to be executed.

5- Execute the workflow:

* Implement a method in the WorkflowEngine class to execute the workflow.
* This method will iterate through the list of workflow steps and invoke their execute() method.
* It will perform the workflow execution based on the added steps, which includes executing the abstract methods overridden by the specific workflow step subclass.
