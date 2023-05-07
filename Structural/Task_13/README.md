# Task 13

Implement a Text Formatting System using the Decorator Pattern

Suppose you need to implement a Text Formatting System where you have multiple types of formatters (e.g., BoldFormatter, ItalicFormatter, UnderlineFormatter) that can apply different styles to a text. You can use the Decorator Pattern to combine multiple formatters and apply them to the same text.


## Steps

1- Identify the Component: 

* In this case, the Component is the Text interface, which should define the method to get the formatted text.

2- Implement the Concrete Component:

* The Concrete Component represents the plain text. In this case, you can create a PlainText class that implements the Text interface and returns the text without formatting.

3- Implement the Decorator: 

* The Decorator represents the formatted text. In this case, you can create a TextFormatter class that extends the PlainText class and adds the formatting to the text. 
* This class should override the getFormattedText() method to apply the formatting.

4- Test the Decorator:

* Create a PlainText object, then create several TextFormatter objects (e.g., BoldFormatter, ItalicFormatter, UnderlineFormatter) and wrap them around the PlainText object.
* Call the format() method on the final decorated object to see the result, which should be a plain text with multiple formatting applied to it, such as bold, italic, and underline.








