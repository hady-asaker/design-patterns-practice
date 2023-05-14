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
                echo "Post [$content] Removed Successfully";
                unset($this->posts[$key]);
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

$post1 = new Post("Ahmed", "abcd", date("Y-m-d h:i:sa"));
$post2 = new Post("Mohamed", "fghj", date("Y-m-d h:i:sa"));
$post3 = new Post("Menoem", "uiop", date("Y-m-d h:i:sa"));

$feed = new Feed();
$feed->addPost($post1);
$feed->addPost($post2);
$feed->addPost($post3);

$post5 = new Post("Menoem", "uiop", date("Y-m-d h:i:sa"));
$feed->addPost($post5);
$feed->removePost("abcd");

echo "<pre>"; print_r($feed->getFeed()); echo "</pre>";

