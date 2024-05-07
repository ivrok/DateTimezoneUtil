# DateTimezoneUtil

DateTimezoneUtil is a PHP utility library that provides functionality to format dates by timestamp and specified timezone.

## Installation

You can install DateTimezoneUtil via Composer:

```composer require ivrok/datetimezone-util```

## Usage

DateTimezoneUtil allows you to format dates by timestamp and specified timezone. Here's how you can use it:

```php
<?php

use Ivrok\DateTimezoneUtil\Date;
use Ivrok\DateTimezoneUtil\TimeZones\ESTZone;

// Get the current timestamp
$timestamp = time();

// Create a Date instance with the timestamp
$date = new Date($timestamp);

// Get the formatted date using the specified format and timezone
$dateFormatted = $date->getFormatted('m/d/Y H:i:s T', new ESTZone());

echo $dateFormatted;
```

## Available Timezones

DateTimezoneUtil provides the following timezone classes out of the box:

- Ivrok\DateTimezoneUtil\TimeZones\AESTZone
- Ivrok\DateTimezoneUtil\TimeZones\CETZone
- Ivrok\DateTimezoneUtil\TimeZones\CSTZone
- Ivrok\DateTimezoneUtil\TimeZones\ESTZone
- Ivrok\DateTimezoneUtil\TimeZones\GMTZone
- Ivrok\DateTimezoneUtil\TimeZones\ISTZone
- Ivrok\DateTimezoneUtil\TimeZones\JSTZone
- Ivrok\DateTimezoneUtil\TimeZones\PSTZone
- Ivrok\DateTimezoneUtil\TimeZones\UTCZone

You can use any of these timezone classes to specify the timezone when formatting dates.

## License

DateTimezoneUtil is open-source software licensed under the [MIT license](LICENSE).

