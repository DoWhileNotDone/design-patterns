<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Structural\Bridge\ReadTheDocs;

final class TextFormatter implements FormatterInterface
{
    public function format(string $text): string
    {
        return $text;
    }
}
