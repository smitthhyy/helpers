<?php
/**
 * Created by PhpStorm.
 * User: trevo
 * Date: 19/06/2018
 * Time: 6:55 PM
 */

namespace Helpers;

use DateTime;

class Date
{
    public static function tomorrow($dateToday = null, $tz = "UTC")
    {
        if ($dateToday == null) $dateToday = date('Y-m-d');
        $newDate = new DateTime($dateToday,$tz);
        $newDate->modify('+1 day');
        return $newDate->format('Y-m-d');
    }

    public static function yesterday($dateToday = null, $tz = "UTC")
    {
        if ($dateToday == null) $dateToday = date('Y-m-d');
        $newDate = new DateTime($dateToday,$tz);
        $newDate->modify('-1 day');
        return $newDate->format('Y-m-d');
    }
}
