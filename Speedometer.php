<?php


class Speedometer
{

    const RAPPORT = 1.609344;

    public static function convertKmToMiles($km)
    {
        return $km/self::RAPPORT;
    }


    public static function convertMilesToKm($miles)
    {
        return $km*self::RAPPORT;
    }

}