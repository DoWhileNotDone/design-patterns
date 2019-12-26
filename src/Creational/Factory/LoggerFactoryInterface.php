<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Creational\Factory;

interface LoggerFactoryInterface
{
    public function createLogger() : LoggerInterface;
}
