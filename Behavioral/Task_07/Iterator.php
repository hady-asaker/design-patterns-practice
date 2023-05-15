<?php

namespace Behavioral\Iterator\Task7;

use Iterator as GlobalIterator;

require_once "Feed.php";

class Iterator implements GlobalIterator
{
    private Feed $feed;
    private $position = 0;
    private array $items = [];

    public function __construct(Feed $feed) 
    {
        $this->feed = $feed;
        $this->iterate();
    }
    public function current(): mixed
    {
        return $this->items[$this->position];
    }
    public function next(): void
    {
        ++$this->position;
    }
    public function valid(): bool
    {
        return isset($this->items[$this->position]);
    }
    public function key(): mixed
    {
        $this->position;
    }
    public function rewind(): void
    {
        $this->position = 0;
    }
    private function iterate()
    {
        $sortedItems = [];
        foreach ($this->feed->getFeed() as $key => $value) 
        {
            $sortedItems[$value->getContent()] = $value;
        }
        ksort($sortedItems, SORT_STRING);
        $this->items = array_values($sortedItems);
    }
}
$post1 = new Post("Ahmed", "My post", date("Y-m-d h:i:sa"));
$post2 = new Post("Mohamed", "keep it", date("Y-m-d h:i:sa"));
$post3 = new Post("Menoem", "try it", date("Y-m-d h:i:sa"));

$feed = new Feed();
$feed->addPost($post1);
$feed->addPost($post2);
$feed->addPost($post3);

// echo "<pre>"; print_r($feed->getFeed()); echo "</pre>";

$test = new Iterator($feed);

foreach ($test as $post) 
{
    echo "Name : " . $post->getAuthor() . " => Post :" . $post->getContent() . "<br>";
}
