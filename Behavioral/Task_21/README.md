# Task 21

### Implement a report generation system with customizable report templates using the Template pattern

You are tasked with implementing a report generation system that supports customizable report templates. The system should allow users to generate different types of reports, such as sales reports, financial reports, and employee reports, based on the selected template. The Template pattern will be used to define the overall structure of the report generation process while allowing for customization in specific steps.


## Steps

1- Define the ReportTemplate class:

* Create a ReportTemplate class that serves as the base template for generating reports.
* This class should define a template method called generateReport() that encapsulates the overall report generation process.
* The template method will provide a consistent structure for generating reports but leave certain steps as abstract methods to be implemented by subclasses.

2- Implement concrete ReportTemplate subclasses:

* Implement concrete subclasses of ReportTemplate, each representing a specific report template.
* For example, you can create a SalesReportTemplate, FinancialReportTemplate, and EmployeeReportTemplate.
* Each subclass should override the abstract methods defined in the base class to provide the specific implementation for generating that type of report.
* The abstract methods can represent customizable steps such as data retrieval, formatting, and rendering.

3- Create the ReportGenerator class:

* Create a ReportGenerator class that serves as the client code for generating reports.
* This class will have a reference to the current report template and provide a method for executing the report generation.

4- Set the report template:

* Provide a method in the ReportGenerator class to set the report template.
* This method will allow the client code to choose the desired report template dynamically.
* It should set the current report template to be used for generating reports.

5- Generate the report:

* Implement a method in the ReportGenerator class to generate the report.
* This method will call the generateReport() method of the currently set report template.
* It will perform the report generation process based on the chosen template, which includes executing the abstract methods overridden by the specific report template subclass.
