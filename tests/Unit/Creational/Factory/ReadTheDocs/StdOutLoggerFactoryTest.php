<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Test\Unit\Creational\Factory\ReadTheDocs;

use PHPUnit\Framework\TestCase;

use DavegTheMighty\DesignPatterns\Creational\Factory\ReadTheDocs\LoggerInterface;
use DavegTheMighty\DesignPatterns\Creational\Factory\ReadTheDocs\LoggerFactoryInterface;
use DavegTheMighty\DesignPatterns\Creational\Factory\ReadTheDocs\StdOutLogger;
use DavegTheMighty\DesignPatterns\Creational\Factory\ReadTheDocs\StdOutLoggerFactory;

final class StdOutLoggerFactoryTest extends TestCase
{
    public function testCreateStdOutLoggerFactory() : void
    {

        $factory = new StdOutLoggerFactory();

        $this->assertInstanceOf(
            StdOutLoggerFactory::class,
            $factory
        );

        $this->assertInstanceOf(
            LoggerFactoryInterface::class,
            $factory
        );
    }

    public function testCreateStdOutLogger() : void
    {
        $factory = new StdOutLoggerFactory();
        $logger = $factory->createLogger();

        $this->assertInstanceOf(
            StdOutLogger::class,
            $logger
        );

        $this->assertInstanceOf(
            LoggerInterface::class,
            $logger
        );
    }
}
