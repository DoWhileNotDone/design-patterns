<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Creational\Factory\ReadTheDocs;

final class StdOutLogger implements LoggerInterface
{
    public function log(string $message)
    {
        echo $message;
    }
}
