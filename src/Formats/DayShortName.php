<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\DayFormatInterface;

class DayShortName extends BaseFormat implements DayFormatInterface
{
    public function getFormat(): string
    {
        return 'D';
    }
}
