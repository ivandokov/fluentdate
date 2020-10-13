<?php

use IvanDokov\FluentDate\FluentDate;
use IvanDokov\FluentDate\Formats\DateTimeISO8601;
use IvanDokov\FluentDate\Formats\DateTimeRFC2822;
use IvanDokov\FluentDate\Formats\DateTimeUNIXEpoch;
use IvanDokov\FluentDate\Formats\DayFullName;
use IvanDokov\FluentDate\Formats\DayNumberOfYearStartingFromZero;
use IvanDokov\FluentDate\Formats\DayNumberOneForMonday;
use IvanDokov\FluentDate\Formats\DayNumberZeroForSunday;
use IvanDokov\FluentDate\Formats\DayShortName;
use IvanDokov\FluentDate\Formats\DaySuffix;
use IvanDokov\FluentDate\Formats\DayWithLeadingZero;
use IvanDokov\FluentDate\Formats\DayWithoutLeadingZero;
use IvanDokov\FluentDate\Formats\Hour24WithLeadingZeros;
use IvanDokov\FluentDate\Formats\Hour24WithoutLeadingZeros;
use IvanDokov\FluentDate\Formats\Microseconds;
use IvanDokov\FluentDate\Formats\Milliseconds;
use IvanDokov\FluentDate\Formats\MinutesWithLeadingZeros;
use IvanDokov\FluentDate\Formats\SecondsWithLeadingZeros;
use IvanDokov\FluentDate\Formats\SeparatorColon;
use IvanDokov\FluentDate\Formats\SeparatorDash;
use IvanDokov\FluentDate\Formats\SeparatorDot;
use IvanDokov\FluentDate\Formats\SeparatorForwardSlash;
use IvanDokov\FluentDate\Formats\SeparatorSpace;
use IvanDokov\FluentDate\Formats\SeparatorString;
use IvanDokov\FluentDate\Formats\TimeAmPmLowercase;
use IvanDokov\FluentDate\Formats\TimeAmPmUppercase;
use IvanDokov\FluentDate\Formats\TimeDaylight;
use IvanDokov\FluentDate\Formats\TimezoneAbbreviation;
use IvanDokov\FluentDate\Formats\TimezoneGMTDifferenceWithColon;
use IvanDokov\FluentDate\Formats\TimezoneGMTDifferenceWithoutColon;
use IvanDokov\FluentDate\Formats\TimeSwatchInternet;
use IvanDokov\FluentDate\Formats\Hour12WithLeadingZeros;
use IvanDokov\FluentDate\Formats\Hour12WithoutLeadingZeros;
use IvanDokov\FluentDate\Formats\Timezone;
use IvanDokov\FluentDate\Formats\TimezoneOffsetInSeconds;
use IvanDokov\FluentDate\Formats\YearFourDigits;
use IvanDokov\FluentDate\Formats\MonthFullName;
use IvanDokov\FluentDate\Formats\YearLeap;
use IvanDokov\FluentDate\Formats\MonthNumberOfDays;
use IvanDokov\FluentDate\Formats\MonthShortName;
use IvanDokov\FluentDate\Formats\MonthTwoDigitsWithLeadingZeros;
use IvanDokov\FluentDate\Formats\MonthTwoDigitsWithoutLeadingZeros;
use IvanDokov\FluentDate\Formats\YearTwoDigits;
use IvanDokov\FluentDate\Formats\WeekNumber;

test('date can be casted to a string', function () {
    $date = new FluentDate(new DateTime());

    $this->assertEquals('', $date->toString());
    $this->assertEquals('', (string)$date);
});

test('formats four digits year', function () {
    $date = FluentDate::forDateTime(new DateTime('01.01.2020'))
        ->year(new YearFourDigits());

    $this->assertEquals('2020', $date);
});

test('formats two digits year', function () {
    $date = FluentDate::forDateTime(new DateTime('01.01.2020'))
        ->year(new YearTwoDigits());

    $this->assertEquals('20', $date);
});

test('formats leap year', function () {
    $date = FluentDate::forDateTime(new DateTime('01.01.2020'))
        ->year(new YearLeap());

    $this->assertEquals('1', $date);

    $date = FluentDate::forDateTime(new DateTime('01.01.2021'))
        ->year(new YearLeap());

    $this->assertEquals('0', $date);
});

test('formats two digits month with leading zeros', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020'))
        ->month(new MonthTwoDigitsWithLeadingZeros());

    $this->assertEquals('03', $date);
});

test('formats two digits month without leading zeros', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020'))
        ->month(new MonthTwoDigitsWithoutLeadingZeros());

    $this->assertEquals('3', $date);
});

test('formats full month name', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020'))
        ->month(new MonthFullName());

    $this->assertEquals('March', $date);
});

test('formats short month name', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020'))
        ->month(new MonthShortName());

    $this->assertEquals('Mar', $date);
});

test('formats number of days in a month', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020'))
        ->month(new MonthNumberOfDays());

    $this->assertEquals('31', $date);
});

test('formats week number', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020'))
        ->week(new WeekNumber());

    $this->assertEquals('09', $date);
});

test('formats day with leading zeros', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020'))
        ->day(new DayWithLeadingZero());

    $this->assertEquals('01', $date);
});

test('formats day without leading zeros', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020'))
        ->day(new DayWithoutLeadingZero());

    $this->assertEquals('1', $date);
});

test('formats full day name', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020'))
        ->day(new DayFullName());

    $this->assertEquals('Sunday', $date);
});

test('formats short day name', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020'))
        ->day(new DayShortName());

    $this->assertEquals('Sun', $date);
});

test('formats day number with starting day 1 - Monday', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020'))
        ->day(new DayNumberOneForMonday());

    $this->assertEquals('7', $date);
});

test('formats day number with starting day 0 - Sunday', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020'))
        ->day(new DayNumberZeroForSunday());

    $this->assertEquals('0', $date);
});

test('formats day number of the year starting with 0', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020'))
        ->day(new DayNumberOfYearStartingFromZero());

    $this->assertEquals('60', $date);
});

test('formats English suffix for the day of the month', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020'))
        ->day(new DaySuffix());

    $this->assertEquals('st', $date);
});

test('formats time am pm suffix lowercase', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 10:30:45'))
        ->time(new TimeAmPmLowercase());

    $this->assertEquals('am', $date);
});

test('formats time am pm suffix uppercase', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 10:30:45'))
        ->time(new TimeAmPmUppercase());

    $this->assertEquals('AM', $date);
});

test('formats time in Swatch Internet', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 10:30:45'))
        ->time(new TimeSwatchInternet());

    $this->assertEquals('479', $date);
});

test('formats time in 12 hour format without leading zeros', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 05:30:45'))
        ->time(new Hour12WithoutLeadingZeros());

    $this->assertEquals('5', $date);
});

test('formats time in 12 hour format with leading zeros', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 05:30:45'))
        ->time(new Hour12WithLeadingZeros());

    $this->assertEquals('05', $date);
});

test('formats time in 24 hour format without leading zeros', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 05:30:45'))
        ->time(new Hour24WithoutLeadingZeros());

    $this->assertEquals('5', $date);

    $date = FluentDate::forDateTime(new DateTime('01.03.2020 15:30:45'))
        ->time(new Hour24WithoutLeadingZeros());

    $this->assertEquals('15', $date);
});

test('formats time in 24 hour format with leading zeros', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 05:30:45'))
        ->time(new Hour24WithLeadingZeros());

    $this->assertEquals('05', $date);

    $date = FluentDate::forDateTime(new DateTime('01.03.2020 15:30:45'))
        ->time(new Hour24WithLeadingZeros());

    $this->assertEquals('15', $date);
});

test('formats minutes with leading zeros', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 05:03:45'))
        ->time(new MinutesWithLeadingZeros());

    $this->assertEquals('03', $date);
});

test('formats seconds with leading zeros', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 05:03:07'))
        ->time(new SecondsWithLeadingZeros());

    $this->assertEquals('07', $date);
});

test('formats microseconds', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 05:03:07.654321'))
        ->time(new Microseconds());

    $this->assertEquals('654321', $date);
});

test('formats milliseconds', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 05:03:07.654'))
        ->time(new Milliseconds());

    $this->assertEquals('654', $date);
});

test('formats timezone', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 05:03:07'))
        ->time(new Timezone());

    $this->assertEquals('UTC', $date);
});

test('formats daylight time', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 00:00:00', new DateTimeZone('Europe/Sofia')))
        ->time(new TimeDaylight());

    $this->assertEquals('0', $date);

    $date = FluentDate::forDateTime(new DateTime('01.06.2020 00:00:00', new DateTimeZone('Europe/Sofia')))
        ->time(new TimeDaylight());

    $this->assertEquals('1', $date);
});

test('formats difference to GMT without colon', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 00:00:00'))
        ->timezone(new TimezoneGMTDifferenceWithoutColon());

    $this->assertEquals('+0000', $date);
});

test('formats difference to GMT with colon', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 00:00:00'))
        ->timezone(new TimezoneGMTDifferenceWithColon());

    $this->assertEquals('+00:00', $date);
});

test('formats timezone abbreviation', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 00:00:00'))
        ->timezone(new TimezoneAbbreviation());

    $this->assertEquals('UTC', $date);
});

test('formats timezone offset in seconds', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 00:00:00'))
        ->timezone(new TimezoneOffsetInSeconds());

    $this->assertEquals('0', $date);
});

test('formats full date time in ISO 8601', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 00:00:00'))
        ->dateTime(new DateTimeISO8601());

    $this->assertEquals('2020-03-01T00:00:00+00:00', $date);
});

test('formats full date time in RFC 2822', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 00:00:00'))
        ->dateTime(new DateTimeRFC2822());

    $this->assertEquals('Sun, 01 Mar 2020 00:00:00 +0000', $date);
});

test('formats seconds since the UNIX epoch', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 00:00:00'))
        ->dateTime(new DateTimeUNIXEpoch());

    $this->assertEquals('1583020800', $date);
});

test('formats multiple date parts', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 00:00:00'))
        ->year(new YearFourDigits())
        ->month(new MonthTwoDigitsWithLeadingZeros())
        ->day(new DayWithLeadingZero());

    $this->assertEquals('20200301', $date);
});

test('formats multiple date parts with dot separator', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 00:00:00'))
        ->year(new YearFourDigits())
        ->separator(new SeparatorDot())
        ->month(new MonthTwoDigitsWithLeadingZeros())
        ->separator(new SeparatorDot())
        ->day(new DayWithLeadingZero());

    $this->assertEquals('2020.03.01', $date);
});

test('formats multiple date parts with space separator', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 00:00:00'))
        ->year(new YearFourDigits())
        ->separator(new SeparatorSpace())
        ->month(new MonthTwoDigitsWithLeadingZeros())
        ->separator(new SeparatorSpace())
        ->day(new DayWithLeadingZero());

    $this->assertEquals('2020 03 01', $date);
});

test('formats multiple date parts with dash separator', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 00:00:00'))
        ->year(new YearFourDigits())
        ->separator(new SeparatorDash())
        ->month(new MonthTwoDigitsWithLeadingZeros())
        ->separator(new SeparatorDash())
        ->day(new DayWithLeadingZero());

    $this->assertEquals('2020-03-01', $date);
});

test('formats multiple date parts with forward slash separator', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 00:00:00'))
        ->year(new YearFourDigits())
        ->separator(new SeparatorForwardSlash())
        ->month(new MonthTwoDigitsWithLeadingZeros())
        ->separator(new SeparatorForwardSlash())
        ->day(new DayWithLeadingZero());

    $this->assertEquals('2020/03/01', $date);
});

test('formats multiple date parts with colon separator', function () {
    $date = FluentDate::forDateTime(new DateTime('10:20:30'))
        ->time(new Hour24WithLeadingZeros())
        ->separator(new SeparatorColon())
        ->time(new MinutesWithLeadingZeros())
        ->separator(new SeparatorColon())
        ->time(new SecondsWithLeadingZeros());

    $this->assertEquals('10:20:30', $date);
});

test('formats multiple date parts with custom string separator', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 00:00:00'))
        ->year(new YearFourDigits())
        ->separator(new SeparatorString('~'))
        ->month(new MonthTwoDigitsWithLeadingZeros())
        ->separator(new SeparatorString('~'))
        ->day(new DayWithLeadingZero());

    $this->assertEquals('2020~03~01', $date);
});

test('gets underlying format string', function () {
    $date = FluentDate::forDateTime(new DateTime('01.03.2020 00:00:00'))
        ->year(new YearFourDigits())
        ->separator(new SeparatorDot())
        ->month(new MonthTwoDigitsWithLeadingZeros())
        ->separator(new SeparatorDot())
        ->day(new DayWithLeadingZero());

    $this->assertEquals('Y.m.d', $date->toFormat());
});

test('formats Carbon instance', function () {
    $carbon = Carbon\Carbon::instance(new DateTime('01.03.2020'));
    $date = FluentDate::forDateTime($carbon)
        ->year(new YearFourDigits())
        ->separator(new SeparatorDot())
        ->month(new MonthTwoDigitsWithLeadingZeros())
        ->separator(new SeparatorDot())
        ->day(new DayWithLeadingZero());

    $this->assertEquals('2020.03.01', $date);
});
