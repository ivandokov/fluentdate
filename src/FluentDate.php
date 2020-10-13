<?php

namespace IvanDokov\FluentDate;

use DateTime;
use DateTimeInterface;
use IvanDokov\FluentDate\Formats\Contracts\DayFormatInterface;
use IvanDokov\FluentDate\Formats\Contracts\FormatInterface;
use IvanDokov\FluentDate\Formats\Contracts\DateTimeFormatInterface;
use IvanDokov\FluentDate\Formats\Contracts\MonthFormatInterface;
use IvanDokov\FluentDate\Formats\Contracts\SeparatorFormatInterface;
use IvanDokov\FluentDate\Formats\Contracts\TimeFormatInterface;
use IvanDokov\FluentDate\Formats\Contracts\TimezoneFormatInterface;
use IvanDokov\FluentDate\Formats\Contracts\WeekFormatInterface;
use IvanDokov\FluentDate\Formats\Contracts\YearFormatInterface;

class FluentDate implements FluentDateInterface
{
    protected DateTimeInterface $datetime;
    protected                   $formats = [];

    public function __construct(DateTimeInterface $datetime)
    {
        $this->datetime = $datetime;
    }

    public static function forDateTime(DateTimeInterface $date): FluentDateInterface
    {
        return new static($date);
    }

    public static function forString(string $date): FluentDateInterface
    {
        return new static(new DateTime($date));
    }

    protected function addFormat(FormatInterface $format): FluentDateInterface
    {
        $this->formats[] = $format;

        return $this;
    }

    public function year(YearFormatInterface $format): FluentDateInterface
    {
        return $this->addFormat($format);
    }

    public function month(MonthFormatInterface $format): FluentDateInterface
    {
        return $this->addFormat($format);
    }

    public function week(WeekFormatInterface $format): FluentDateInterface
    {
        return $this->addFormat($format);
    }

    public function day(DayFormatInterface $format): FluentDateInterface
    {
        return $this->addFormat($format);
    }

    public function time(TimeFormatInterface $format): FluentDateInterface
    {
        return $this->addFormat($format);
    }

    public function timezone(TimezoneFormatInterface $format): FluentDateInterface
    {
        return $this->addFormat($format);
    }

    public function dateTime(DateTimeFormatInterface $format): FluentDateInterface
    {
        return $this->addFormat($format);
    }

    public function separator(SeparatorFormatInterface $format): FluentDateInterface
    {
        return $this->addFormat($format);
    }

    public function toFormat(): string
    {
        $result = '';
        foreach ($this->formats as $format) {
            $result .= $format->getFormat();
        }

        return $result;
    }

    public function toString(): string
    {
        $result = '';
        foreach ($this->formats as $format) {
            $result .= $format->format($this->datetime);
        }

        return $result;
    }

    public function __toString(): string
    {
        return $this->toString();
    }
}
