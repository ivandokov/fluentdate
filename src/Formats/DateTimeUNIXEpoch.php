<?php

namespace IvanDokov\FluentDate\Formats;

use DateTimeInterface;
use IvanDokov\FluentDate\Formats\Contracts\DateTimeFormatInterface;

class DateTimeUNIXEpoch implements DateTimeFormatInterface
{
    public function format(DateTimeInterface $dateTime): string
    {
        return $dateTime->format('U');
    }
}
