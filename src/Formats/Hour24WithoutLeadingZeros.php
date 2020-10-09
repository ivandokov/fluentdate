<?php

namespace IvanDokov\FluentDate\Formats;

use DateTimeInterface;
use IvanDokov\FluentDate\Formats\Contracts\TimeFormatInterface;

class Hour24WithoutLeadingZeros implements TimeFormatInterface
{
    public function format(DateTimeInterface $dateTime): string
    {
        return $dateTime->format('G');
    }
}
