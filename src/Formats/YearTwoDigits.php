<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\YearFormatInterface;

class YearTwoDigits extends BaseFormat implements YearFormatInterface
{
    public function getFormat(): string
    {
        return 'y';
    }
}
