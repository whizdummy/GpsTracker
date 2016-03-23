<?php
	
	namespace App;

	use Illuminate\Database\Eloquent\Model;
	use App\Location;
	use App\Admin;

	class Client extends Model{

		protected $table = 'tblClient';
		protected $primaryKey = 'clientId';

		public function locations(){
			return $this->hasMany('Location');
		}

		public function admin(){
			return $this->belongsTo('Admin');
		}

		public function getStatusAttribute(){
			if ($this->boolStatus == 1){
				return "Active";
			}
			else if($this->boolStatus == 2){
				return "Expired";
			}
		}

	}