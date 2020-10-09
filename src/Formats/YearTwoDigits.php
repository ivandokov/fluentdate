<?php

namespace IvanDokov\FluentDate\Formats;

use DateTimeInterface;
use IvanDokov\FluentDate\Formats\Contracts\YearFormatInterface;

class YearTwoDigits implements YearFormatInterface
{
    public function format(DateTimeInterface $dateTime): string
    {
        return $dateTime->format('y');
    }
}
