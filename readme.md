# FluentDate

[![Tests Action Status](https://github.com/ivandokov/fluentdate/workflows/Tests/badge.svg)](https://github.com/ivandokov/fluentdate/actions)
[![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/ivandokov/fluentdate)](https://packagist.org/packages/ivandokov/fluentdate)
[![Packagist Version](https://img.shields.io/packagist/v/ivandokov/fluentdate)](https://packagist.org/packages/ivandokov/fluentdate)
[![Packagist Downloads](https://img.shields.io/packagist/dm/ivandokov/fluentdate)](https://packagist.org/packages/ivandokov/fluentdate)
[![Packagist License](https://img.shields.io/packagist/l/ivandokov/fluentdate)](https://packagist.org/packages/ivandokov/fluentdate)

Format PHP dates with ease. You don't have to Google the [format](https://www.php.net/manual/en/datetime.format.php) string each time. Use plain English to set the format, almost as you pronounce it.

## Installation

```bash
composer require ivandokov/fluentdate
```

## How to use

For full details of how to use the library please take a look at our [tests](tests/FluentDateTest.php).

### Format string

Any string that can be parsed by `DateTime` class can be used.

```php
$date = FluentDate::forString('now')
    ->year(new YearFourDigits())
    ->separator(new SeparatorDot())
    ->month(new MonthTwoDigitsWithLeadingZeros())
    ->separator(new SeparatorDot())
    ->day(new DayWithLeadingZero()); 

echo "Today is $date";
//    Today is 2020.10.09
```

### Format DateTime
```php
$datetime = new DateTime('now'); // The DateTime you want to format
$date = FluentDate::forDateTime($datetime)
    ->year(new YearFourDigits())
    ->separator(new SeparatorDot())
    ->month(new MonthTwoDigitsWithLeadingZeros())
    ->separator(new SeparatorDot())
    ->day(new DayWithLeadingZero()); 

echo "Today is $date";
//    Today is 2020.10.09
```

The `$date` can be directly used in strings since it implements `__toString()` magic method but if you want you can use the `->toString()` method.

### The format string

If you want to get the underlying date format string you can use the `->toFormat()` method like this:

```php
$datetime = new DateTime('01.03.2020 00:00:00');
$dateFormat = FluentDate::forDateTime($datetime)
    ->year(new YearFourDigits())
    ->separator(new SeparatorDot())
    ->month(new MonthTwoDigitsWithLeadingZeros())
    ->separator(new SeparatorDot())
    ->day(new DayWithLeadingZero())
    ->toFormat(); 
// Y.m.d
```

### Format Carbon
If you want to format a [Carbon](https://carbon.nesbot.com/) instance you can use the same method described above.

```php
$carbon = Carbon::now();
$date = FluentDate::forDateTime($carbon)
    ->year(new YearFourDigits())
    ->separator(new SeparatorDot())
    ->month(new MonthTwoDigitsWithLeadingZeros())
    ->separator(new SeparatorDot())
    ->day(new DayWithLeadingZero())
    ->toString();
// 2020.10.09
```


## Available formats

The format classes are self explanatory by their class names so you can take a look at all available classes in the [Formats](src/Formats) directory.

## Separators

We support the most common separators for dates but also a custom string separator in case of need.

* `IvanDokov\FluentDate\Formats\SeparatorDot`
* `IvanDokov\FluentDate\Formats\SeparatorDash`
* `IvanDokov\FluentDate\Formats\SeparatorForwardSlash`
* `IvanDokov\FluentDate\Formats\SeparatorSpace`
* `IvanDokov\FluentDate\Formats\SeparatorColon`
* `IvanDokov\FluentDate\Formats\SeparatorString`
