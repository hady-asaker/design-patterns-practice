# Task 17

Implement a music player with different playback states.

In this task, you will implement a music player using the State pattern. The music player will have different states representing its playback behavior and available actions based on its current state.


## Steps

1- Define the State interface:

* Create a State interface that declares methods for the actions that can be performed by the music player, such as play(), pause(), stop(), nextTrack(), previousTrack(), etc.

2- Implement concrete State classes:

* Implement concrete classes that represent different states of the music player. 
* For example, you can create a PlayingState for when the music is currently playing, a PausedState for when the music is paused, and a StoppedState for when the music is stopped.

3- Create the MusicPlayer class:

* Create a MusicPlayer class that encapsulates the state of the music player and provides methods for performing actions such as playing, pausing, stopping, and skipping tracks.

4- Set the initial state:

* Initialize the MusicPlayer with an initial state, such as the StoppedState.

5- Handle state transitions:

* Implement methods in the MusicPlayer class to handle state transitions based on the actions performed by the user. 
* For example, when the play button is pressed, transition to the PlayingState, and when the pause button is pressed, transition to the PausedState.
