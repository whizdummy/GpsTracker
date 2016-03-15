<?php

	namespace App;
	use Illuminate\Database\Eloquent\Model;
	use App\Client;

	class Location extends Model{

		protected $table = 'tblLocation';

		public function client(){
			return $this->belongsTo('Client');
		}

		public function getStringLocation(){
			
		}

	}