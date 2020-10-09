<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\MonthFormatInterface;

class MonthFullName extends BaseFormat implements MonthFormatInterface
{
    public function getFormat(): string
    {
        return 'F';
    }
}
