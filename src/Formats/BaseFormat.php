<?php

namespace IvanDokov\FluentDate\Formats;

use DateTimeInterface;
use IvanDokov\FluentDate\Formats\Contracts\FormatInterface;

abstract class BaseFormat implements FormatInterface
{
    abstract public function getFormat(): string;

    public function format(DateTimeInterface $dateTime): string
    {
        return $dateTime->format($this->getFormat());
    }
}
