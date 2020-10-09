<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\MinuteFormatInterface;

class Microseconds extends BaseFormat implements MinuteFormatInterface
{
    public function getFormat(): string
    {
        return 'u';
    }
}
