<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\SeparatorFormatInterface;

class SeparatorColon extends BaseFormat implements SeparatorFormatInterface
{
    public function getFormat(): string
    {
        return ':';
    }
}
