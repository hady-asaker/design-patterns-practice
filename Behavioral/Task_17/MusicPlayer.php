<?php

namespace Behavioral\State\Task17;
require_once "Song.php";
require_once "PlayingState.php";
require_once "PausedState.php";
require_once "StoppedState.php";

class MusicPlayer
{
    private Song $song;
    private array $songs = [];
    private StateInterface $state;
    private array $Logs = [];
    private $search;

    public function __construct(Song $song) 
    {
        $this->song = $song;
        $this->songs[] = $song;
        $this->state = new StoppedState();
        $this->search = count($this->songs) - 1; // Initialize $search
    }

    public function addSong(Song $song): void
    {
        $this->songs[] = $song;
    }

    public function getSong()
    {
        return $this->song;
    }

    public function SongProceed()
    {
        $this->state->setContext($this);
        return $this->state->proceed();
    }

    public function getLogs()
    {
        return $this->Logs;
    }

    public function nextTrack()
    {
        $this->search++;
        if ($this->search > count($this->songs) - 1) 
        {
            $this->search = 0;
        }
        $this->song = $this->songs[$this->search];
    }

    public function previousTrack()
    {
        $this->search--;
        if ($this->search < 0) 
        {
            $this->search = count($this->songs) - 1;
        }
        $this->song = $this->songs[$this->search];
    }
    
    public function addLog($log)
    {
        $this->Logs[] = $log;
    }

    public function setState(StateInterface $state): void
    {
        $this->state = $state;
    }

    public function getState(): StateInterface
    {
        return $this->state;
    }

    public function getSongs()
    {
        return $this->Logs;
    }

}

$song1 = new Song("Song1", 8.3);
$song2 = new Song("Song2", 2.6);
$song3 = new Song("Song3", 7.2);
$song4 = new Song("Song4", 5.9);

$player = new MusicPlayer($song1);
$player->addSong($song2);
$player->addSong($song3);
$player->addSong($song4);
// echo '<pre>'; print_r($player->getSongs()); echo'</pre>';

$playingState = new PlayingState();
$PausedState = new PausedState();
$stoppedState = new StoppedState();

$player->nextTrack();
// $player->previousTrack();

// echo $player->SongProceed();    // Stopped Default

$player->setState($playingState);
echo $player->SongProceed();

echo "<br>";

$player->setState($PausedState);
echo $player->SongProceed();

echo "<br>";

$player->setState($stoppedState);
echo $player->SongProceed();
