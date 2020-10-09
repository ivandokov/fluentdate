<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\MinuteFormatInterface;

class Milliseconds extends BaseFormat implements MinuteFormatInterface
{
    public function getFormat(): string
    {
        return 'v';
    }
}
