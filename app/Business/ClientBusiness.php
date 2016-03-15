<?php

	namespace App\Business;
	use App\Client;
	use App\Repository\ClientRepository;

	class ClientBusiness{

		public function createClient(Client $client){

			if ($client->strFirstName == null || $client->strFirstName == "" || $client->strFirstName == " "){
				return "failed-input1";
			}
			if ($client->strLastName == null || $client->strLastName == "" || $client->strLastName == " "){
				return "failed-input2";
			}
			if ($client->strContactNo == null || $client->strContactNo == "" || $client->strContactNo == " "){
				return "failed-input3";
			}
			if ($client->txtAddress == null || $client->txtAddress == "" || $client->txtAddress == " "){
				return "failed-input4";
			}
			if ($client->deviceNo == null || $client->deviceNo == "" || $client->deviceNo == " "){
				return "failed-input5";
			}
			return (new ClientRepository())->insertClient($client);

		}

	}