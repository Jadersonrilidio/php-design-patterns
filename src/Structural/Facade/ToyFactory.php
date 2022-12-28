<?php

namespace Src\Structural\Facade;

use Src\Structural\Facade\Manufacturer;
use Src\Structural\Facade\Post;
use Src\Structural\Facade\SMS;

class ToyFactory
{
    private Manufacturer $manufacturer;
    private Post $post;
    private SMS $sms;

    public function __construct(int $capacity, string $factoryAddress, string $contactNumber)
    {
        $this->manufacturer = new Manufacturer($capacity);
        $this->post = new Post($factoryAddress);
        $this->sms = new SMS($contactNumber);
    }

    public function processOrder(string $address, string $phone, string $message = 'Your order has been shipped.'): bool
    {
        $item = $this->manufacturer->build();
        $this->post->dispatch($item, $address);
        $this->sms->send($phone, $message);
        return true;
    }
}
