<?php

namespace Ivrok\DateTimezoneUtil;

use Ivrok\DateTimezoneUtil\TimeZones\TimezoneHelper;
use Ivrok\DateTimezoneUtil\TimeZones\ZoneInterface;

class Date
{
    private \DateTime $dateTime;

    public function __construct(int $timestamp, ZoneInterface $timezone = null)
    {
        $this->dateTime = new \DateTime();
        $this->dateTime->setTimestamp($timestamp);

        if ($timezone === null) {
            $timezone = TimezoneHelper::getDefaultTimezone();
        }
        $this->dateTime->setTimezone(new \DateTimeZone($timezone->getName()));
    }

    public function getFormatted(string $format, ZoneInterface $timeZone = null)
    {
        $tempDateTime = clone $this->dateTime;

        if ($timeZone) {
            $tempDateTime->setTimezone(new \DateTimeZone($timeZone->getName()));
        }

        return $tempDateTime->format($format);
    }
}
