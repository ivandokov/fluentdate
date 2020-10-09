<?php

namespace IvanDokov\FluentDate\Formats;

use DateTimeInterface;
use IvanDokov\FluentDate\Formats\Contracts\TimeFormatInterface;

class TimeAmPmLowercase implements TimeFormatInterface
{
    public function format(DateTimeInterface $dateTime): string
    {
        return $dateTime->format('a');
    }
}