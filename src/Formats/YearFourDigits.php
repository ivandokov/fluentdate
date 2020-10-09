<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\YearFormatInterface;

class YearFourDigits extends BaseFormat implements YearFormatInterface
{
    public function getFormat(): string
    {
        return 'Y';
    }
}
