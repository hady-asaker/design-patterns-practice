<?php

namespace Behavioral\Iterator\Task7;
require_once "Feed.php";

class Iterator
{
    private Feed $feed;
    private $position = 0;
    private array $items = [];

    public function __construct(Feed $feed) 
    {
        $this->feed = $feed;
    }
}
