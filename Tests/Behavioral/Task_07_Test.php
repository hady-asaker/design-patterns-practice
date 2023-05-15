<?php

namespace Test;
require_once "./Behavioral/Task_07/Iterator.php";

use Behavioral\Iterator\Task7\Feed;
use Behavioral\Iterator\Task7\Iterator;
use Behavioral\Iterator\Task7\Post;
use PHPUnit\Framework\TestCase;

class Task_07_Test extends TestCase
{
    public function testIterator()
    {
        $post1 = new Post("Ahmed", "abcd", date("Y-m-d h:i:sa"));
        $post2 = new Post("Mohamed", "fghj", date("Y-m-d h:i:sa"));
        $post3 = new Post("Menoem", "uiop", date("Y-m-d h:i:sa"));

        $feed = new Feed();
        $feed->addPost($post1);
        $feed->addPost($post2);
        $feed->addPost($post3);

        $test = new Iterator($feed);

        $contents = [];
        foreach ($test as $post) {
            $contents[] =  $post->getContent();
        }

        $this->assertEquals($contents, ['abcd', 'fghj', 'uiop']);
        $this->assertContains('uiop', $contents);
    }
    
}

