<?php

namespace Behavioral\Iterator\Task5;
require_once "Song.php";

class Playlist
{
    public $playlist = [];

    public function addSong(Song $song)
    {
        $this->playlist[] = $song;
    }

    public function getIterator(PlaylistIterator $Iterator)
    {
        return new PlaylistIterator($this);
    }

    public function getPlaylist()
    {
        return $this->playlist;
    }
}
