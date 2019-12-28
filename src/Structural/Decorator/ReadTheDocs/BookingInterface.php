<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Structural\Decorator\ReadTheDocs;

interface BookingInterface
{
    public function getDescription(): string;
    public function calculatePrice(): int;
}
