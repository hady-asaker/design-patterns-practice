<?php

namespace Behavioral\Iterator\Task5;
require_once "Playlist.php";

use Iterator;

class TitleIterator implements Iterator
{
    private $position = 0;
    private Playlist $playlist;
    private array $sortedTitles = [];

    public function __construct(Playlist $playlist) 
    {
        $this->playlist = $playlist;
        $this->sortTitles();
    }

    public function current(): mixed
    {
        if ($this->valid()) {
            return $this->sortedTitles[$this->position];
        }
        else {
            return "No more songs";
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
    public function key(): mixed
    {
        return $this->position;
    }
    public function valid(): bool
    {
        return isset($this->sortedTitles[$this->position]);
    }
    public function rewind(): void
    {
        $this->position = 0;
    }
    private function sortTitles()
    {
        $titles = [];
        foreach ($this->playlist->getPlaylist() as $key => $song) 
        {
            $titles[] = $song->getTitle();
        }
        
        $this->sortedTitles = $titles;
        array_multisort($this->sortedTitles, SORT_STRING); // Sort the sortedTitles array
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

$iterator = new TitleIterator($playlist);

// echo "Songs Sorted By Title: " . "<br>";     // Un Hash
// $i = 1;
// foreach ($iterator as $song)
// {
//     echo "$i : $song " . '<br>';
//     $i++;
// }
echo $iterator->current();                       // Hash
$iterator->next();
$iterator->next();
$iterator->next();
$iterator->next();
echo $iterator->current();
