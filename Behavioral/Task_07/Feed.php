<?php

namespace Behavioral\Iterator\Task7;
require_once "Post.php";

class Feed
{
    private Post $post;
    private array $posts = [];

    public function addPost(Post $post)
    {
        foreach ($this->posts as $value) 
        {
            if ($value->getContent() == $post->getContent() && $value->getAuthor() == $post->getAuthor())
            {
                echo "Post Found" . "<br>";
                return;
            }
        }
        $this->posts[] = $post;
    }

    public function removePost($content)
    {
        foreach ($this->posts as $key => $value) 
        {
            if ($value->getContent() == $content)
            {
                unset($this->posts[$key]);
                echo "Post [$content] Removed Successfully";
                return;
            }
        }
        echo "post Not Found";
    }
    public function getFeed()
    {
        return $this->posts;
    }
    public function getIterator()
    {
        return new Iterator($this);
    }
}
