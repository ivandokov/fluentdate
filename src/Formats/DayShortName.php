<?php

namespace IvanDokov\FluentDate\Formats;

use DateTimeInterface;
use IvanDokov\FluentDate\Formats\Contracts\DayFormatInterface;

class DayShortName implements DayFormatInterface
{
    public function format(DateTimeInterface $dateTime): string
    {
        return $dateTime->format('D');
    }
}
