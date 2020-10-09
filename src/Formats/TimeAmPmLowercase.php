<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\TimeFormatInterface;

class TimeAmPmLowercase extends BaseFormat implements TimeFormatInterface
{
    public function getFormat(): string
    {
        return 'a';
    }
}
