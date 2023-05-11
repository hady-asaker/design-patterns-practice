# Task 05

Iterator for a Music Playlist

In this task, you will implement an iterator for a music playlist. The iterator will allow iterating over the songs in the playlist, providing functionality to navigate through the playlist and access the current song.

## Steps

1-Define the Song class: 

* Create a class called Song that represents a single song in the playlist. 
* It should have properties such as the song title, artist, and duration.

2-Create a Playlist class: 

* Implement a Playlist class that represents a collection of songs. 
* This class should have methods to add songs to the playlist and retrieve the iterator for the playlist.

3-Implement the Iterator interface: 

* Define an interface called Iterator that declares methods for iterating over the songs in the playlist, such as hasNext() to check if there are more songs and next() to retrieve the next song.

4-Implement a concrete Iterator class: 

* Create a class that implements the Iterator interface and provides the logic for iterating over the songs in the playlist. 
* This class should maintain the necessary state to keep track of the current position in the playlist and retrieve the next song.

5-Integrate the Iterator with the Playlist class: 

* Modify the Playlist class to implement the Iterator interface and provide the necessary logic to create and return an instance of the concrete Iterator class.

6-Test the iterator: 

* Use the iterator to iterate over the songs in the playlist and perform operations such as playing the current song, skipping to the next song, and checking if there are more songs.
