<?php

namespace Src\Structural\Decorator;

use \Src\Structural\Decorator\Book;

class PrintBook implements Book
{
    private $eBook;

    public function __construct(string $title, string $author, string $contents)
    {
        $this->eBook = new EBook($title, $author, $contents);
    }

    public function getTitle(): string
    {
        return $this->eBook->getTitle();
    }

    public function getAuthor(): string
    {
        return $this->eBook->getAuthor();
    }

    public function getContents(): string
    {
        return $this->eBook->getContents();
    }

    public function getText(): string
    {
        $text = $this->eBook->getTitle() . " by " . $this->eBook->getAuthor();
        $text .= PHP_EOL;
        $text .= PHP_EOL;
        $text .= $this->eBook->getContents();

        return $text;
    }
}
