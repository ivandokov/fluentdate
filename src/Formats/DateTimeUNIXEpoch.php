<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\DateTimeFormatInterface;

class DateTimeUNIXEpoch extends BaseFormat implements DateTimeFormatInterface
{
    public function getFormat(): string
    {
        return 'U';
    }
}
