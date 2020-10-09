<?php

namespace IvanDokov\FluentDate;

use DateTimeInterface;
use IvanDokov\FluentDate\Formats\Contracts\DayFormatInterface;
use IvanDokov\FluentDate\Formats\Contracts\DateTimeFormatInterface;
use IvanDokov\FluentDate\Formats\Contracts\MonthFormatInterface;
use IvanDokov\FluentDate\Formats\Contracts\SeparatorFormatInterface;
use IvanDokov\FluentDate\Formats\Contracts\TimeFormatInterface;
use IvanDokov\FluentDate\Formats\Contracts\TimezoneFormatInterface;
use IvanDokov\FluentDate\Formats\Contracts\WeekFormatInterface;
use IvanDokov\FluentDate\Formats\Contracts\YearFormatInterface;

interface FluentDateInterface
{
    public function __construct(DateTimeInterface $dateTime);

    public static function forDateTime(DateTimeInterface $date): self;

    public function year(YearFormatInterface $format): self;

    public function month(MonthFormatInterface $format): self;

    public function week(WeekFormatInterface $format): self;

    public function day(DayFormatInterface $format): self;

    public function time(TimeFormatInterface $format): self;

    public function timezone(TimezoneFormatInterface $format): self;

    public function dateTime(DateTimeFormatInterface $format): self;

    public function separator(SeparatorFormatInterface $format): self;

    public function toFormat(): string;

    public function toString(): string;

    public function __toString(): string;
}
