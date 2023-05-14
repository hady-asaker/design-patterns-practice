<?php

namespace Behavioral\Iterator\Task7;

class Post
{
    private $author;
    private $content;
    private $timestamp;

    public function __construct($author, $content, $timestamp) 
    {
        $this->author = $author;
        $this->content = $content;
        $this->timestamp = $timestamp;
    }

    public function getAuthor()
    {
        return $this->author;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}
