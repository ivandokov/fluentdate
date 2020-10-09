<?php

namespace IvanDokov\FluentDate\Formats;

use DateTimeInterface;
use IvanDokov\FluentDate\Formats\Contracts\SeparatorFormatInterface;

class SeparatorSpace implements SeparatorFormatInterface
{
    public function format(DateTimeInterface $dateTime): string
    {
        return ' ';
    }
}
