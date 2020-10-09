<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\DayFormatInterface;

class DayNumberOneForMonday extends BaseFormat implements DayFormatInterface
{
    public function getFormat(): string
    {
        return 'N';
    }
}
