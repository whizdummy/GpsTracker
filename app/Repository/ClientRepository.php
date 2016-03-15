<?php

	namespace App\Repository;
	use App\Client;
	use App\Admin;

	class ClientRepository{

		public function insertClient(Client $client){
			try{

				$client->save();
				return "success";

			}catch(Exception $e){
				dd($e);
			}
			return "failed-database";
		}

		public function selectClientById($clientId){

			try{

				return Client::find($clientId)
					->andWhere('boolStatus', true)
					->first();

			}catch(Exception $e){
				dd($e);
			}
			return null;

		}

		public function selectClientByName(Client $client){

			try{

				return Client::where('strFirstName', $client->strFirstName)
						->andWhere('strMiddleName', $client->strMiddleName)
						->andWhere('strLastName', $client->strLastName)
						->andWhere('boolStatus', true)
						->first();

			}catch(Exception $e){
				dd($e);
			}
			return null;

		}

		public function selectClientByDeviceNo(Client $client){

			try{

				return Client::where('deviceNo', $client->deviceNo)
						->andWhere('boolStatus', true)
						->first();

			}catch(Exception $e){
				dd($e);
			}
			return null;

		}

		public function selectAllClient(){
			try{

				return Client::all();

			}catch(Exception $e){
				dd($e);
			}
			return null;
		}

		public function updateClient(Client $client){

			try{

				$client->save();
				return "success";

			}catch(Exception $e){
				dd($e);
			}
			return "failed-database";

		}

		public function deactivateClient($clientId){

			try{

				Client::find($client->clientId)
					->andWhere('boolStatus', true)
					->update(['boolStatus' => false]);
				return "success";

			}catch(Exception $e){
				dd($e);
			}
			return "failed-database";

		}

	}