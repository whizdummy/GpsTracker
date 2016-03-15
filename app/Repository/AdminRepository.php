<?php

	namespace App\Repository;

	use App\Admin;
	use Hash;

	class AdminRepository{

		public function insertAdmin(Admin $admin){
			try{
				$admin->save();
				return "success";
			}catch(Exception $e){
				dd($e);
			}
			return "failed-database";
		}

		public function selectAdminById(int $adminId){
			try{
				return Admin::where('adminId', $adminId)
					->where('boolStatus', 1)
					->first();
			}catch(Exception $e){
				dd($e);
			}
			return null;
		}

		public function selectAdminByName(Admin $admin){
			try{
				return Admin::where('strFirstName', $admin->strFirstName)
					->andWhere('strMiddleName', $admin->strMiddleName)
					->andWhere('strLastName', $admin->strLastName)
					->andWhere('boolStatus', 1);
			}catch(Exception $e){
				dd($e);
			}
			return null;
		}

		public function selectAdminByUsername(Admin $admin){
			try{
				return Admin::where('strUsername', $admin->strUsername)
					->where('boolStatus', 1)->first();
			}catch(Exception $e){
				dd($e);
			}
			return null;
		}

		public function selectAllAdmin(){
			try{

				return Admin::all();

			}catch(Exception $e){
				dd($e);
			}
			return null;
		}

		public function loginAdmin(Admin $admin){

			try{
				if (Admin::where('strUsername', $admin->strUsername)
						->where('boolStatus', true)
						->count() > 0){
					if (Admin::where('strUsername', $admin->strUsername)
							->where('strPassword', Hash::make($admin->strPassword))){
						return "success";
					} 
					return "failed-incorrect-password";
				}
				return "failed-does-not-exist";
			}catch(Exception $e){
				dd($e);
			}
			return "failed-database";

		}

		public function updateAdmin(Admin $admin){

			try{
				$admin->save();
				return "success";
			}catch(Exception $e){
				dd($e);
			}
			return "failed-database";

		}

		public function deactivateAdmin(int $adminId){
			try{

				Admin::find($adminId)
					->andWhere('boolStatus', true)
					->update(['boolStatus' => false]);
				return "success";

			}catch(Exception $e){
				dd($e);
			}
			return "failed-database";
		}

		public function getAllClientsFromAdmin(Admin $admin){
			try{

				return Admin::find($admin->adminId)
						->clients()
						->where('tblClient.boolStatus', true);

			}catch(Exception $e){
				dd($e);
			}
			return null;
		}

	}