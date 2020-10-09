<?php

namespace IvanDokov\FluentDate\Formats;

use DateTimeInterface;
use IvanDokov\FluentDate\Formats\Contracts\SeparatorFormatInterface;

class SeparatorString implements SeparatorFormatInterface
{
    protected string $separator;

    public function __construct(string $separator)
    {
        $this->separator = $separator;
    }

    public function format(DateTimeInterface $dateTime): string
    {
        return $this->separator;
    }
}
