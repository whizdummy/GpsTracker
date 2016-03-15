<?php
	
	namespace App;

	use Illuminate\Database\Eloquent\Model;
	use App\Location;
	use App\Admin;

	class Client extends Model{

		protected $table = 'tblClient';

		public function locations(){
			return $this->hasMany('Location');
		}

		public function admin(){
			return $this->belongsTo('Admin');
		}

	}