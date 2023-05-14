<?php

namespace Behavioral\Iterator\Task5;
require_once "Playlist.php";
use Iterator;

class PlaylistIterator implements Iterator
{
    private $position = 0;
    private Playlist $playlist;

    public function __construct(Playlist $playlist) 
    {
        $this->playlist = $playlist;
    }

    public function current(): mixed
    {
        if ($this->valid()) {
            return $this->playlist->getPlaylist()[$this->position];
        }
        else {
            return "No more songs";
        }
    }
    public function next(): void
    {
        $this->position++;
    }
    public function key(): mixed
    {
        return $this->position;
    }
    public function valid(): bool
    {
        return isset($this->playlist->getPlaylist()[$this->position]);
    }
    public function rewind(): void
    {
        $this->position = 0;
    }
}

$Song1 = new Song("Title1", "Artist1", "ayHaga1");
$Song2 = new Song("Title2", "Artist2", "ayHaga2");
$Song3 = new Song("Title3", "Artist3", "ayHaga3");

$playlist = new Playlist();
$playlist->addSong($Song1);
$playlist->addSong($Song2);
$playlist->addSong($Song3);

$iterator = new PlaylistIterator($playlist);

foreach ($iterator as $song)
{
    echo $song->getTitle() . '<br>';
}
