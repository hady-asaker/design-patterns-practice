<?php

namespace Test;
require_once "Behavioral/Task_17/MusicPlayer.php";

use Behavioral\State\Task17\Song;
use Behavioral\State\Task17\MusicPlayer;
use Behavioral\State\Task17\PausedState;
use Behavioral\State\Task17\PlayingState;
use Behavioral\State\Task17\StoppedState;
use PHPUnit\Framework\TestCase;

class Task_17_Test extends TestCase

{
    public function testPlay()
    {
        $song1 = new Song("Song1", 8.3);
        $song2 = new Song("Song2", 2.6);
        $song3 = new Song("Song3", 7.2);
        $song4 = new Song("Song4", 5.9);

        $player = new MusicPlayer($song1);
        $player->addSong($song2);
        $player->addSong($song3);
        $player->addSong($song4);

        $playingState = new PlayingState();

        $player->nextTrack();   //2

        $player->setState($playingState);
        $test = $player->SongProceed();

        $this->assertEquals("Song2 Playing", $test);
    }

    public function testPause()
    {
        $song1 = new Song("Song1", 8.3);
        $song2 = new Song("Song2", 2.6);
        $song3 = new Song("Song3", 7.2);
        $song4 = new Song("Song4", 5.9);

        $player = new MusicPlayer($song1);
        $player->addSong($song2);
        $player->addSong($song3);
        $player->addSong($song4);

        $PausedState = new PausedState();

        $player->previousTrack();   // 4
        $player->previousTrack();   // 3

        $player->setState($PausedState);
        $test = $player->SongProceed();

        $this->assertEquals("Song3 Paused", $test);
    }

    public function testStop()
    {
        $song1 = new Song("Song1", 8.3);
        $song2 = new Song("Song2", 2.6);
        $song3 = new Song("Song3", 7.2);
        $song4 = new Song("Song4", 5.9);

        $player = new MusicPlayer($song1);
        $player->addSong($song2);
        $player->addSong($song3);
        $player->addSong($song4);

        $stoppedState = new StoppedState();

        $player->nextTrack();   // 2
        $player->nextTrack();   // 3
        $player->nextTrack();   // 4

        $player->setState($stoppedState);
        $test = $player->SongProceed();

        $this->assertEquals("Song4 Stopped", $test);
    }
}
