<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Structural\Bridge\ReadTheDocs;

class OtherService extends Service
{
    public function get(): string
    {
        return $this->implementation->format('Other');
    }
}
