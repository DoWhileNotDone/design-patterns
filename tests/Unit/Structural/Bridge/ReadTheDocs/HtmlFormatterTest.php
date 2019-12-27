<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Test\Unit\Structural\Bridge\ReadTheDocs;

use PHPUnit\Framework\TestCase;

use DavegTheMighty\DesignPatterns\Structural\Bridge\ReadTheDocs\FormatterInterface;
use DavegTheMighty\DesignPatterns\Structural\Bridge\ReadTheDocs\HelloWorldService;
use DavegTheMighty\DesignPatterns\Structural\Bridge\ReadTheDocs\HtmlFormatter;
use DavegTheMighty\DesignPatterns\Structural\Bridge\ReadTheDocs\OtherService;

final class HtmlFormatterTest extends TestCase
{
    public function testCreateFormatter() : void
    {

        $formatter = new HtmlFormatter();

        $this->assertInstanceOf(
            HtmlFormatter::class,
            $formatter
        );

        $this->assertInstanceOf(
            FormatterInterface::class,
            $formatter
        );
    }

    public function testFormatterOutput() : void
    {
        $service = new HelloWorldService(new HtmlFormatter());
        $this->assertEquals('<p>Hello World</p>', $service->get());

        $service = new OtherService(new HtmlFormatter());
        $this->assertEquals('<p>Other</p>', $service->get());
    }
}
