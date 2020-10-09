<?php

namespace IvanDokov\FluentDate\Formats;

use DateTimeInterface;
use IvanDokov\FluentDate\Formats\Contracts\WeekFormatInterface;

class WeekNumber implements WeekFormatInterface
{
    public function format(DateTimeInterface $dateTime): string
    {
        return $dateTime->format('W');
    }
}
