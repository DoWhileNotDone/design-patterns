<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Structural\Decorator\ReadTheDocs;

class DoubleRoomBooking implements BookingInterface
{
    public function getDescription(): string
    {
        return 'Double Room';
    }

    public function calculatePrice(): int
    {
        return 40;
    }
}
