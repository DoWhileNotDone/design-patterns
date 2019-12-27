<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Test\Unit\Creational\Factory\ReadTheDocs;

use PHPUnit\Framework\TestCase;

use DavegTheMighty\DesignPatterns\Creational\Factory\ReadTheDocs\LoggerInterface;
use DavegTheMighty\DesignPatterns\Creational\Factory\ReadTheDocs\LoggerFactoryInterface;
use DavegTheMighty\DesignPatterns\Creational\Factory\ReadTheDocs\FileLogger;
use DavegTheMighty\DesignPatterns\Creational\Factory\ReadTheDocs\FileLoggerFactory;

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
