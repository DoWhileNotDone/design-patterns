<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Structural\Decorator\ReadTheDocs;

class WiFi extends BookingDecorator
{
    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with Wifi';
    }

    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + 5;
    }
}
