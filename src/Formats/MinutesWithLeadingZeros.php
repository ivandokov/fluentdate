<?php

namespace IvanDokov\FluentDate\Formats;

use DateTimeInterface;
use IvanDokov\FluentDate\Formats\Contracts\MinuteFormatInterface;

class MinutesWithLeadingZeros implements MinuteFormatInterface
{
    public function format(DateTimeInterface $dateTime): string
    {
        return $dateTime->format('i');
    }
}
