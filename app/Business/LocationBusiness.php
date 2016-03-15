<?php

	namespace App\Business;

	use App\Location;
	use App\Repository\LocationRepository;

	class LocationBusiness{

		public function createLocation(Location $location){

			if ($location->dblLatitude == null || $location->dblLatitude == " " || $location->dblLatitude == ""){
				return "input";
			}
			if ($location->dblLongtitude == null || $location->dblLongtitude == " " || $location->dblLongtitude == ""){
				return "input";
			}
			return (new LocationRepository())->insertLocation($location);
		}

	}