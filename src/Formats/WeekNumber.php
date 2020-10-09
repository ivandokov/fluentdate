<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\WeekFormatInterface;

class WeekNumber extends BaseFormat implements WeekFormatInterface
{
    public function getFormat(): string
    {
        return 'W';
    }
}
