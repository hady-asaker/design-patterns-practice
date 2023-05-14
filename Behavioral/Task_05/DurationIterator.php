<?php

namespace Behavioral\Iterator\Task5;

use Iterator;

require_once "Playlist.php";

class DurationIterator implements Iterator
{
    private Playlist $playlist;
    private $position = 0;
    private array $SongsSortedByDuration = [];

    public function __construct(Playlist $playlist) 
    {
        $this->playlist = $playlist;
        $this->sortSongsByDuration();
    }

    public function current() :mixed
    {
        if ($this->valid()) 
        {
            return $this->SongsSortedByDuration[$this->position];
        }
        else {
            return "No More Songs";
        }
    }
    public function next() :void
    {     
        if ($this->valid()) 
        {
            $this->position++;
        }
        else {
            echo "No More Songs";
        }
    }
    public function key() :mixed
    {
        return $this->position;
    }
    public function valid() :bool
    {
        return isset($this->SongsSortedByDuration[$this->position]);
    }
    public function rewind() :void
    {
        $this->position = 0;
    }
    private function sortSongsByDuration()
    {
        $sortedDurations = [];
        foreach ($this->playlist->getPlaylist() as $song)
        {
            $sortedDurations[(int)($song->getDuration())] = $song;
        }
        ksort($sortedDurations, SORT_DESC);
        $this->SongsSortedByDuration = array_values($sortedDurations);
    }
}

$Song1 = new Song("Rhiannon", "Fleetwood Mac", 8.26);
$Song2 = new Song("Eleanor", "The Beatles", 7.22);
$Song3 = new Song("Elmadf3gya", "Figo", 9.38);
$Song4 = new Song("Goode", "Johnny B", 5.30);

$playlist = new Playlist();
$playlist->addSong($Song1);
$playlist->addSong($Song3);
$playlist->addSong($Song4);
$playlist->addSong($Song2);

$iterator = new DurationIterator($playlist);

echo "Songs Sorted By Duration: " . "<br>";

foreach ($iterator as $song)
{
    echo $song->getTitle() . " => Duration [" . $song->getDuration() . ']<br>';
}
