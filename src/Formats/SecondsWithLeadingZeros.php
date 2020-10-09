<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\MinuteFormatInterface;

class SecondsWithLeadingZeros extends BaseFormat implements MinuteFormatInterface
{
    public function getFormat(): string
    {
        return 's';
    }
}
