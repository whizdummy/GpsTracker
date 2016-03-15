<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ParseLocation extends Controller
{
    function parseLatitude($latitude) {
    	$pattern = "/Latitude = ([\d\s.]+)/";

    	preg_match_all($pattern, $latitude, $matches);

    	return trim($matches[1][0]);
    }

    function parseLongitude($Longitude) {
    	$pattern = "/Longitude = ([\d\s.]+)/";

    	preg_match_all($pattern, $Longitude, $matches);

    	return trim($matches[1][0]);
    }
}
