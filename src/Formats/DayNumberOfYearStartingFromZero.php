<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\DayFormatInterface;

class DayNumberOfYearStartingFromZero extends BaseFormat implements DayFormatInterface
{
    public function getFormat(): string
    {
        return 'z';
    }
}
