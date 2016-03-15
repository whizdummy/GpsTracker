<?php

	namespace App\Business;

	use App\Repository\AdminRepository;
	use App\Admin;
	use Hash;

	class AdminBusiness{

		public function createAdmin(Admin $admin){
			if ($admin->strFirstName == null || $admin->strFirstName == "" || $admin->strFirstName == " "){
				return "failed-input1";
			}
			if ($admin->strLastName == null || $admin->strLastName == "" || $admin->strLastName == " "){
				return "failed-input2";
			}
			if ($admin->strUsername == null || $admin->strUsername == "" || $admin->strUsername == " "){
			 	return "failed-input";
			}
			if ($admin->strPassword == null || $admin->strPassword == "" || $admin->strPassword == " "){
				return "failed-input";
			}
			if ($admin->strEmail == null || $admin->strEmail == "" || $admin->strEmail == " "){
				return "failed-input3";
			}
			if ($admin->strContactNo == null || $admin->strContactNo == "" || $admin->strContactNo == " "){
				return "failed-input4";
			}
			if ($admin->txtPermanentAddress == null || $admin->txtPermanentAddress == "" || $admin->txtPermanentAddress == " "){
				return "failed-input5";
			}
			// if ($admin->strCurrentAddress == null || $admin->strCurrentAddress == "" || $admin->strCurrentAddress == " "){
			// 	return "failed-input";
			// }
			// if ($admin->zipCode == null || $admin->zipCode == "" || $admin->zipCode == " "){
			// 	return "failed-input";
			// }
			if ($admin->strGender == null || $admin->strGender == "" || $admin->strGender == " "){
				return "failed-input6";
			}
			if ($admin->dateBirthday == null){
				return "failed-input7";
			}
			$admin->strPassword = Hash::make($admin->strPassword);
			return (new AdminRepository())->insertAdmin($admin);
		}

		public function loginAdmin(Admin $admin){

			if ($admin->strUsername == "" || $admin->strUsername == null || $admin->strUsername == " "){
				return "failed-input";
			}
			if ($admin->strPassword == "" || $admin->strPassword == null || $admin->strPassword == " "){
				return "failed-input";
			}
			$admin->strPassword = Hash::make($admin->strPassword);
			return (new AdminRepository())->loginAdmin($admin);

		}

	}