<?php

namespace IvanDokov\FluentDate\Formats;

use DateTimeInterface;
use IvanDokov\FluentDate\Formats\Contracts\DayFormatInterface;

class DayNumberZeroForSunday implements DayFormatInterface
{
    public function format(DateTimeInterface $dateTime): string
    {
        return $dateTime->format('w');
    }
}
