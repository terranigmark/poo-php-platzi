<?php

namespace App;

class Comment
{
    protected $body;

    public function __construct($body)
    {
        $this->body = $body;
    }
}