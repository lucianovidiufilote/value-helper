<?php


namespace LucianOvidiuFilote\ValueHelper;

/**
 * Class ValueHelper
 */
class ValueHelper
{
    public static function convertToInt($string)
    {
        $string = self::keepNumbersOnly($string);
        return (int)$string;
    }

    public static function keepNumbersOnly($string)
    {
        return preg_replace('/[^0-9]/', '', $string);
    }
}