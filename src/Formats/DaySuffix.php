<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\DayFormatInterface;

class DaySuffix extends BaseFormat implements DayFormatInterface
{
    public function getFormat(): string
    {
        return 'S';
    }
}
