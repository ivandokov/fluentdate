# FluentDate

Format PHP Dates with ease without the need to Google the format you want.

## Installation

```bash
composer require ivandokov/fluentdate
```

## How to use

### Format DateTime
```php
$datetime = new DateTime('now'); // The DateTime you want to format
$date = FluentDate::forDateTime($datetime)
    ->year(new YearFourDigits())
    ->separator(new SeparatorDot())
    ->month(new MonthTwoDigitsWithLeadingZeros())
    ->separator(new SeparatorDot())
    ->day(new DayWithLeadingZero()); 

echo "The formatted date is $date";
//    The formatted date is 2020.10.09
```

The `$date` can be directly used in strings since it implements `__toString()` magic method but if you want you can use the `->toString()` method.

For full details of how to use the class please take a look at our [tests](tests/FluentDateTest.php).

### The format string

If you want to get the underlying date format string you can use the `->toFormat()` method like this:

```php
$datetime = new DateTime('01.03.2020 00:00:00');
$dateFormat = FluentDate::forDateTime(new DateTime('01.03.2020 00:00:00'))
    ->year(new YearFourDigits())
    ->separator(new SeparatorDot())
    ->month(new MonthTwoDigitsWithLeadingZeros())
    ->separator(new SeparatorDot())
    ->day(new DayWithLeadingZero())
    ->toFormat(); 
// Y.m.d
```

### Formatting Carbon instance
If you want to format a [Carbon](https://carbon.nesbot.com/) instance you can use the same method described above.

```php
$carbon = Carbon::now();
$dateFormat = FluentDate::forDateTime($carbon)
    ->year(new YearFourDigits())
    ->separator(new SeparatorDot())
    ->month(new MonthTwoDigitsWithLeadingZeros())
    ->separator(new SeparatorDot())
    ->day(new DayWithLeadingZero());
$carbon->format($dateFormat->toFormat());
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
