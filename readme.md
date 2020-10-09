# FluentDate

Format PHP Dates with ease without the need to Google the format you want.

## Installation

```bash
composer require ivandokov/fluentdate
```

## How to use

```php
use IvanDokov\FluentDate\FluentDate;
use IvanDokov\FluentDate\Formats\YearFourDigits;
use IvanDokov\FluentDate\Formats\MonthTwoDigitsWithLeadingZeros;
use IvanDokov\FluentDate\Formats\DayWithLeadingZero;
use IvanDokov\FluentDate\Formats\SeparatorDot;

$datetime = new DateTime('now'); // The DateTime you want to format
$date = FluentDate::forDateTime($datetime)
    ->year(new YearFourDigits())
    ->separator(new SeparatorDot())
    ->month(new MonthTwoDigitsWithLeadingZeros())
    ->separator(new SeparatorDot())
    ->day(new DayWithLeadingZero()); 

echo "The formatted date is $date";
```

The `$date` can be directly used in strings since it implements `__toString()` magic method but if you want you can use the `->toString()` method.

For full details of how to use the class please take a look at our [tests](tests/FluentDateTest.php).

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
