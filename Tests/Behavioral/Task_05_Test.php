<?php

namespace Test;
require_once "./Behavioral/Task_05/PlaylistIterator.php";
require_once "./Behavioral/Task_05/TitleIterator.php";
require_once "./Behavioral/Task_05/ArtistIterator.php";
require_once "./Behavioral/Task_05/DurationIterator.php";

use Behavioral\Iterator\Task5\ArtistIterator;
use Behavioral\Iterator\Task5\DurationIterator;
use Behavioral\Iterator\Task5\Playlist;
use Behavioral\Iterator\Task5\PlaylistIterator;
use Behavioral\Iterator\Task5\Song;
use Behavioral\Iterator\Task5\TitleIterator;
use PHPUnit\Framework\TestCase;

class Task_05_Test extends TestCase
{
    public function testPlaylistIterator()
    {
        $Song1 = new Song("Rhiannon", "Fleetwood Mac", 8.26);
        $Song2 = new Song("Eleanor", "The Beatles", 7.22);
        $Song3 = new Song("Elmadf3gya", "Figo", 9.38);
        $Song4 = new Song("Goode", "Johnny B", 5.30);

        $playlist = new Playlist();
        $playlist->addSong($Song1);
        $playlist->addSong($Song2);
        $playlist->addSong($Song3);
        $playlist->addSong($Song4);

        $iterator = new PlaylistIterator($playlist);

        $sortedSongs = [];
        foreach ($iterator as $song) 
        {
            $sortedSongs[] = $song->getTitle();
        }
        $this->assertEquals($sortedSongs, ["Rhiannon", "Eleanor", "Elmadf3gya", "Goode"]);
    }

    public function testTitleIterator()
    {
        $Song1 = new Song("Rhiannon", "Fleetwood Mac", 8.26);
        $Song2 = new Song("Eleanor", "The Beatles", 7.22);
        $Song3 = new Song("Elmadf3gya", "Figo", 9.38);
        $Song4 = new Song("Goode", "Johnny B", 5.30);

        $playlist = new Playlist();
        $playlist->addSong($Song1);
        $playlist->addSong($Song3);
        $playlist->addSong($Song4);
        $playlist->addSong($Song2);

        $iterator = new TitleIterator($playlist);

        $sortedSongs = [];
        foreach ($iterator as $song) 
        {
            $sortedSongs[] = $song;
        }
        $this->assertEquals($sortedSongs, ["Eleanor", "Elmadf3gya", "Goode", "Rhiannon"]);
    }

    public function testArtistIterator()
    {
        $Song1 = new Song("Rhiannon", "Fleetwood Mac", 8.26);
        $Song2 = new Song("Eleanor", "The Beatles", 7.22);
        $Song3 = new Song("Elmadf3gya", "Figo", 9.38);
        $Song4 = new Song("Goode", "Johnny B", 5.30);

        $playlist = new Playlist();
        $playlist->addSong($Song1);
        $playlist->addSong($Song3);
        $playlist->addSong($Song4);
        $playlist->addSong($Song2);

        $iterator = new ArtistIterator($playlist);

        $sortedSongs = [];
        foreach ($iterator as $song) 
        {
            $sortedSongs[] = $song->getTitle();
        }
        $this->assertEquals($sortedSongs, ["Elmadf3gya", "Rhiannon", "Goode", "Eleanor"]);
    }

    public function testDurationIterator()
    {
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

        $sortedSongs = [];
        foreach ($iterator as $song) 
        {
            $sortedSongs[] = $song->getDuration();
        }
        $this->assertEquals($sortedSongs, [5.3, 7.22, 8.26, 9.38]);
    }
}
