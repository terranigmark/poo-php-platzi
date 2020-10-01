<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;

class PostTest extends TestCase
{
    public function test_add_comment_to_post()
    {
        $post = new Post(); //
        $comment = "comentario"; //

        $post->addComment($comment); //

        $this->assertEquals(1, $post->countComments()); //
        // $this->assertInstaceOf(Comment::class, $post->getComments()[0]);
    }
}