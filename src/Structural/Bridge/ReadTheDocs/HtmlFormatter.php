<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Structural\Bridge\ReadTheDocs;

final class HtmlFormatter implements FormatterInterface
{
    public function format(string $text): string
    {
        return sprintf('<p>%s</p>', $text);
    }
}
