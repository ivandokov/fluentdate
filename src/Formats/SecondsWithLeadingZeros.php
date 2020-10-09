<?php

namespace IvanDokov\FluentDate\Formats;

use DateTimeInterface;
use IvanDokov\FluentDate\Formats\Contracts\MinuteFormatInterface;

class SecondsWithLeadingZeros implements MinuteFormatInterface
{
    public function format(DateTimeInterface $dateTime): string
    {
        return $dateTime->format('s');
    }
}
