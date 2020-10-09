<?php

namespace IvanDokov\FluentDate\Formats;

use DateTimeInterface;
use IvanDokov\FluentDate\Formats\Contracts\TimezoneFormatInterface;

class TimezoneGMTDifferenceWithColon implements TimezoneFormatInterface
{
    public function format(DateTimeInterface $dateTime): string
    {
        return $dateTime->format('P');
    }
}
