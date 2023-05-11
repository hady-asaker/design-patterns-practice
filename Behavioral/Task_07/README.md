# Task 07

Iterator for a Social Media Feed

In this task, you will implement an iterator for a social media feed. The iterator will allow iterating over posts in a user's social media feed, providing functionality to access and interact with the posts.

## Steps

1-Define the Post class: 

* Create a class called Post that represents a single post in the social media feed. 
It should have properties such as the post content, author, and timestamp.

2-Create a Feed class: 

* Implement a Feed class that represents a user's social media feed. 
* This class should have methods to add posts to the feed, remove posts from the feed, and retrieve the iterator for the feed.

3-Implement the Iterator interface: 

* Define an interface called Iterator that declares methods for iterating over the posts in the social media feed, such as hasNext() to check if there are more posts and next() to retrieve the next post.

4-Implement a concrete Iterator class: 

* Create a class that implements the Iterator interface and provides the logic for iterating over the posts in the social media feed. 
* This class should maintain the necessary state to keep track of the current position in the feed and retrieve the next post.

5-Integrate the Iterator with the Feed class: 

* Modify the Feed class to implement the Iterator interface and provide the necessary logic to create and return an instance of the concrete Iterator class.

6-Test the iterator: 

* Use the iterator to iterate over the posts in the social media feed and perform operations such as liking a post, commenting on a post, and checking if there are more posts.
