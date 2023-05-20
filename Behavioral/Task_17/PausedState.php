<?php

namespace Behavioral\State\Task17;
require_once "StateInterface.php";

class PausedState implements StateInterface
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
        return $this->player->getSong()->getName() . " Paused";
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
