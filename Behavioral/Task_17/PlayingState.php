<?php

namespace Behavioral\State\Task17;
require_once "StateInterface.php";

class PlayingState implements StateInterface
{
    private StateInterface $state;
    private MusicPlayer $player;

    public function setContext(MusicPlayer $player)
    {
        $this->player = $player;
        $this->addStateToLog();
    }

    public function proceed()
    {
        return $this->player->getSong()->getName() . " Playing";
    }

    public function getState()
    {
        return $this;
    }

    public function getContext()
    {
        return $this->player;
    }
    
    private function addStateToLog()
    {
        $this->getContext()->addLog($this);
    }
}
