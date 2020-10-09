<?php

namespace IvanDokov\FluentDate\Formats\Contracts;

use DateTimeInterface;

interface FormatInterface
{
    public function format(DateTimeInterface $dateTime): string;
    public function getFormat(): string;
}
