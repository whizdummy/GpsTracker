<?php

	namespace App;

	use Illuminate\Database\Eloquent\Model;
	use App\Client;

	class Admin extends Model{

		protected $table = 'tblAdmin';
		protected $primaryKey = 'adminId';
		protected $fillable = ['strUsername', 'strFirstName', 'strMiddleName', 
			'strLastName', 'strPassword', 'strEmail', 'strContactNo', 'txtPermanentAddress',
			'strCurrentAddress', 'zipCode', 'boolStatus'];

		public function clients(){
			return $this->hasMany('Client');
		}

	}