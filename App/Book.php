<?php

namespace App;

class Book
{
    private $date;
    private $tags;
    private $content;

    public function __construct($date)
    {
        $this->date = $date;
    }

    public function getDate()
    {
        return date_format($this->date, 'd/m/Y'); 
    }

    public function setTags(string $tag)
    {
        $this->tags[] = $tag;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }
}