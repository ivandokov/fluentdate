<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\MonthFormatInterface;

class MonthNumberOfDays extends BaseFormat implements MonthFormatInterface
{
    public function getFormat(): string
    {
        return 't';
    }
}
