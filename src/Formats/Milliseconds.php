<?php

namespace IvanDokov\FluentDate\Formats;

use DateTimeInterface;
use IvanDokov\FluentDate\Formats\Contracts\MinuteFormatInterface;

class Milliseconds implements MinuteFormatInterface
{
    public function format(DateTimeInterface $dateTime): string
    {
        return $dateTime->format('v');
    }
}
