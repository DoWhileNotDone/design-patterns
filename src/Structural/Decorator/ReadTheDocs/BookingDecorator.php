<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Structural\Decorator\ReadTheDocs;

abstract class BookingDecorator implements BookingInterface
{
    protected $booking;

    public function __construct(BookingInterface $booking)
    {
        $this->booking = $booking;
    }
}
