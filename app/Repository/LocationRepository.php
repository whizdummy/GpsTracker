<?php

	namespace App\Repository;
	use App\Location;

	class LocationRepository{

		public function insertLocation(Location $location){

			try{

				$location->save();
				return "success";

			}catch(Exception $e){
				dd($e);
			}
			return "failed-database";

		}

		public function selectLocationById($locationId){

			try{

				return Location::find($locationId);

			}catch(Exception $e){
				dd($e);
			}
			return null;

		}

		public function selectLocationListByDate(Client $client,$dateFrom,$dateTo){

			try{

				return Client::find($client->clientId)
						->locations()
						->whereBetween('created_at', [$dateFrom, $dateTo])
						->get();

			}catch(Exception $e){
				dd($e);
			}
			return null;

		}

	}