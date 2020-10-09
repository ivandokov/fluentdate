<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\SeparatorFormatInterface;

class SeparatorString extends BaseFormat implements SeparatorFormatInterface
{
    protected string $separator;

    public function __construct(string $separator)
    {
        $this->separator = $separator;
    }

    public function getFormat(): string
    {
        return $this->separator;
    }
}
