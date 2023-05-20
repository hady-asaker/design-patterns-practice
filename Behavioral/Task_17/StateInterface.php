<?php

namespace Behavioral\State\Task17;
require_once "MusicPlayer.php";

interface StateInterface
{
    public function setContext(MusicPlayer $player);
    public function proceed();
}
