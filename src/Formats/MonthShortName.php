<?php

namespace IvanDokov\FluentDate\Formats;

use DateTimeInterface;
use IvanDokov\FluentDate\Formats\Contracts\MonthFormatInterface;

class MonthShortName implements MonthFormatInterface
{
    public function format(DateTimeInterface $dateTime): string
    {
        return $dateTime->format('M');
    }
}
