<?php

use PHPUnit\Framework\TestCase;

use App\Post;
use App\Comment;

use Faker\Factory as Faker;

class PostTest extends TestCase
{
    private $post;
    private $comment;

    protected function setUp() : void
    {
        $faker = Faker::create();
        $this->post = new Post($faker->sentence);
        $this->comment = new Comment($faker->text);
    }

    public function test_add_comment_to_post()
    {        
        $this->post->addComment($this->comment);
        
        $this->assertEquals(1, $this->post->countComments());
        $this->assertInstanceOf(Comment::class, $this->post->getComments()[0]);
    }
}