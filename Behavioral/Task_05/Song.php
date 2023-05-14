<?php

namespace Behavioral\Iterator\Task5;

class Song
{
    public $SongTitle;
    public $Artist;
    public $Duration;

    public function __construct($SongTitle, $Artist, $Duration) 
    {
        $this->SongTitle = $SongTitle;
        $this->Artist = $Artist;
        $this->Duration = $Duration;
    }
    public function getTitle() 
    {
        return $this->SongTitle;
    }
    public function getArtist() 
    {
        return $this->Artist;
    }
    public function getDuration() 
    {
        return $this->Duration;
    }
}
