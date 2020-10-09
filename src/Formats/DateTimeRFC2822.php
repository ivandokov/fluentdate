<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\DateTimeFormatInterface;

class DateTimeRFC2822 extends BaseFormat implements DateTimeFormatInterface
{
    public function getFormat(): string
    {
        return 'r';
    }
}
