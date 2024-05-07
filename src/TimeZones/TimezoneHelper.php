<?php

namespace Ivrok\DateTimezoneUtil\TimeZones;

use Ivrok\DateTimezoneUtil\Exceptions\NoExistingTimeZoneException;

class TimezoneHelper
{

    /**
     * @throws NoExistingTimeZoneException
     */
    public static function getDefaultTimezone()
    {
        $defaultTimezone = date_default_timezone_get();

        switch ($defaultTimezone) {
            case 'EST':
            case 'America/New_York':
                return new ESTZone();

            case 'CST6CDT':
            case 'America/Chicago':
                return new CSTZone();

            case 'PST8PDT':
            case 'America/Los_Angeles':
                return new PSTZone();

            case 'GMT':
                return new GMTZone();

            case 'CET':
            case 'Europe/Berlin':
                return new CETZone();

            case 'IST':
            case 'Asia/Kolkata':
                return new ISTZone();

            case 'JST':
            case 'Asia/Tokyo':
                return new JSTZone();

            case 'AEST':
            case 'Australia/Sydney':
                return new AESTZone();

            case 'UTC':
                return new UTCZone();

            default:
                throw new NoExistingTimeZoneException(sprintf('Could not find timezone "%s"', $defaultTimezone));
        }
    }
}
