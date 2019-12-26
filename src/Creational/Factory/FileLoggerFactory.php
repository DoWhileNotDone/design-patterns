<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Creational\Factory;

final class FileLoggerFactory implements LoggerFactoryInterface
{
    private $file_path;

    public function __construct(string $file_path)
    {
        $this->file_path = $file_path;
    }

    public function createLogger() : LoggerInterface
    {
        return new FileLogger($this->file_path);
    }
}
