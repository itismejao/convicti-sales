<?php

namespace App\Helpers;

class CalculateDistances {

    public static function byCoordinates(float $latitudeStart, $longitudeStart, $latitudeEnd, $longitudeEnd){

        $earthRadius = 6371; // Raio médio da Terra em quilômetros

        $lat1 = deg2rad($latitudeStart);
        $lon1 = deg2rad($longitudeStart);
        $lat2 = deg2rad($latitudeEnd);
        $lon2 = deg2rad($longitudeEnd);

        $dlat = $lat2 - $lat1;
        $dlon = $lon2 - $lon1;

        $a = sin($dlat / 2) ** 2 + cos($lat1) * cos($lat2) * sin($dlon / 2) ** 2;
        $c = 2 * asin(sqrt($a));

        $distance = $earthRadius * $c;

        return $distance;

    }
}