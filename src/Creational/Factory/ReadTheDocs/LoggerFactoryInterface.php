<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Creational\Factory\ReadTheDocs;

interface LoggerFactoryInterface
{
    public function createLogger() : LoggerInterface;
}
