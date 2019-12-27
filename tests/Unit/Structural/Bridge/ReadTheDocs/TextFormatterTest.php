<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Test\Unit\Structural\Bridge\ReadTheDocs;

use PHPUnit\Framework\TestCase;

use DavegTheMighty\DesignPatterns\Structural\Bridge\ReadTheDocs\FormatterInterface;
use DavegTheMighty\DesignPatterns\Structural\Bridge\ReadTheDocs\HelloWorldService;
use DavegTheMighty\DesignPatterns\Structural\Bridge\ReadTheDocs\OtherService;
use DavegTheMighty\DesignPatterns\Structural\Bridge\ReadTheDocs\TextFormatter;

final class TextFormatterTest extends TestCase
{
    public function testCreateFormatter() : void
    {

        $formatter = new TextFormatter();

        $this->assertInstanceOf(
            TextFormatter::class,
            $formatter
        );

        $this->assertInstanceOf(
            FormatterInterface::class,
            $formatter
        );
    }

    public function testFormatterOutput() : void
    {
        $service = new HelloWorldService(new TextFormatter());
        $this->assertEquals('Hello World', $service->get());

        $service = new OtherService(new TextFormatter());
        $this->assertEquals('Other', $service->get());
    }
}
