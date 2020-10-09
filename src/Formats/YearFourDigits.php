<?php

namespace IvanDokov\FluentDate\Formats;

use DateTimeInterface;
use IvanDokov\FluentDate\Formats\Contracts\YearFormatInterface;

class YearFourDigits implements YearFormatInterface
{
    public function format(DateTimeInterface $dateTime): string
    {
        return $dateTime->format('Y');
    }
}
