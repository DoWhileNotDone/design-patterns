<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Structural\Bridge\ReadTheDocs;

class HelloWorldService extends Service
{
    public function get(): string
    {
        return $this->implementation->format('Hello World');
    }
}
