<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Structural\Decorator\ReadTheDocs;

class ExtraBed extends BookingDecorator
{
    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with extra bed';
    }

    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + 15;
    }
}
