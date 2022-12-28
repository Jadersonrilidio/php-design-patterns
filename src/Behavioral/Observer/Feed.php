<?php

namespace Src\Behavioral\Observer;

use \SplSubject;
use \SplObserver;

class Feed implements SplSubject
{
    private $name;
    private $observers = array();
    private $content;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function attach(SplObserver $observer): void
    {
        $observerHash = spl_object_hash($observer);
        $this->observers[$observerHash] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
        $observerHash = spl_object_hash($observer);
        unset($this->observers[$observerHash]);
    }

    public function breakOutNews(string $content): void
    {
        $this->content = $content;
        $this->notify();
    }

    public function getContent(): string
    {
        return $this->content . ' on ' . $this->name . '.';
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
