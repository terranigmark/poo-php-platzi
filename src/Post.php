<?php

namespace App;

class Post
{
    protected $title;
    protected $comments = [];

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;
    }

    public function countComments()
    {
        return count($this->comments);
    }

    public function getComments()
    {
        return $this->comments;
    }
}