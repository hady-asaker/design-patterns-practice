<?php

namespace Behavioral\State\Task17;
require_once "StateInterface.php";

class StoppedState implements StateInterface
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
        return $this->player->getSong()->getName() . " Stopped";
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
