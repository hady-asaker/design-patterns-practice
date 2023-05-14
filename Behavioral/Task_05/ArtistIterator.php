<?php

namespace Behavioral\Iterator\Task5;

use Iterator;

require_once "Playlist.php";

class ArtistIterator implements Iterator
{
    private Playlist $playlist;
    private $position = 0;
    private $SongsSortedByArtist = [];

    public function __construct(Playlist $playlist) 
    {
        $this->playlist = $playlist;
        $this->sortSongsByArtist();
    }

    public function current() :mixed
    {
        if ($this->valid()) 
        {
            return $this->SongsSortedByArtist[$this->position];
        }
        else {
            return "No More Songs";
        }
    }
    public function next(): void
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
        return (isset($this->SongsSortedByArtist[$this->position]));
    }
    public function rewind() :void
    {
        $this->position = 0;
    }

    private function sortSongsByArtist()
    {
        $sortedArtists = [];
        foreach ($this->playlist->getPlaylist() as $song) 
        {
            $sortedArtists[$song->getArtist()] = $song;
        }
        ksort($sortedArtists, SORT_STRING);
        $this->SongsSortedByArtist = array_values($sortedArtists);
    }
}

$Song1 = new Song("Rhiannon", "Fleetwood Mac", "8:26");
$Song2 = new Song("Eleanor", "The Beatles", "7:22");
$Song3 = new Song("Elmadf3gya", "Figo", "88:88");
$Song4 = new Song("Goode", "Johnny B", "5:30");

$playlist = new Playlist();
$playlist->addSong($Song1);
$playlist->addSong($Song3);
$playlist->addSong($Song4);
$playlist->addSong($Song2);

$iterator = new ArtistIterator($playlist);

echo "Songs Sorted By Artist Name: " . "<br>";

foreach ($iterator as $song)
{
    echo $song->getTitle() . " => Artist [" . $song->getArtist() . ']<br>';
}
