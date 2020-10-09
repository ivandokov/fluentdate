<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\TimeFormatInterface;

class Hour12WithoutLeadingZeros extends BaseFormat implements TimeFormatInterface
{
    public function getFormat(): string
    {
        return 'g';
    }
}
