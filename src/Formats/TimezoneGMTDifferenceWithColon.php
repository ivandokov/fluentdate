<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\TimezoneFormatInterface;

class TimezoneGMTDifferenceWithColon extends BaseFormat implements TimezoneFormatInterface
{
    public function getFormat(): string
    {
        return 'P';
    }
}
