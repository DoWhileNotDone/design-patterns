<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Test\Unit\Creational\Factory;

use PHPUnit\Framework\TestCase;

use DavegTheMighty\DesignPatterns\Creational\Factory\LoggerInterface;
use DavegTheMighty\DesignPatterns\Creational\Factory\LoggerFactoryInterface;
use DavegTheMighty\DesignPatterns\Creational\Factory\FileLogger;
use DavegTheMighty\DesignPatterns\Creational\Factory\FileLoggerFactory;

final class FileLoggerFactoryTest extends TestCase
{
    public function testCreateStdOutLoggerFactory() : void
    {

        $factory = new FileLoggerFactory('/tmp/out.log');

        $this->assertInstanceOf(
            FileLoggerFactory::class,
            $factory
        );

        $this->assertInstanceOf(
            LoggerFactoryInterface::class,
            $factory
        );
    }

    public function testCreateStdOutLogger() : void
    {
        $factory = new FileLoggerFactory('/tmp/out.log');
        $logger = $factory->createLogger();

        $this->assertInstanceOf(
            FileLogger::class,
            $logger
        );

        $this->assertInstanceOf(
            LoggerInterface::class,
            $logger
        );
    }
}
