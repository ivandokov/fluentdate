<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\DateTimeFormatInterface;

class DateTimeISO8601 extends BaseFormat implements DateTimeFormatInterface
{
    public function getFormat(): string
    {
        return 'c';
    }
}
