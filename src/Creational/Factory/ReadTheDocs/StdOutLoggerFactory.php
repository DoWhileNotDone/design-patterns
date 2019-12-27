<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Creational\Factory\ReadTheDocs;

final class StdOutLoggerFactory implements LoggerFactoryInterface
{
    public function createLogger() : LoggerInterface
    {
        return new StdOutLogger();
    }
}
