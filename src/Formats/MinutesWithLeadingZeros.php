<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\MinuteFormatInterface;

class MinutesWithLeadingZeros extends BaseFormat implements MinuteFormatInterface
{
    public function getFormat(): string
    {
        return 'i';
    }
}
