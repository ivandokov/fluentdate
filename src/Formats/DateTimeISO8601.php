<?php

namespace IvanDokov\FluentDate\Formats;

use DateTimeInterface;
use IvanDokov\FluentDate\Formats\Contracts\DateTimeFormatInterface;

class DateTimeISO8601 implements DateTimeFormatInterface
{
    public function format(DateTimeInterface $dateTime): string
    {
        return $dateTime->format('c');
    }
}
