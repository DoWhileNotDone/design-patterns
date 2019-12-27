<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Structural\Bridge\ReadTheDocs;

interface FormatterInterface
{
    public function format(string $text): string;
}
