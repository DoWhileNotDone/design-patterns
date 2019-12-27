<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Structural\Bridge\ReadTheDocs;

abstract class Service
{

    protected $implementation;

    public function __construct(FormatterInterface $implementation)
    {
        $this->implementation = $implementation;
    }

    abstract public function get(): string;
}
