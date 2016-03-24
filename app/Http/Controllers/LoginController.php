<?php

	namespace App\Http\Controllers;

	use Hash;

	use Illuminate\Http\Request;
	use App\Http\Requests;

	use App\Admin;
	use App\Business\AdminBusiness;
	use App\Repository\AdminRepository;

	class LoginController extends Controller{

		public function login(Request $request){

			$admin = new Admin();
			$admin->strUsername = $request->strUsername;
			$admin->strPassword = $request->strPassword;

			$strStatus = (new AdminBusiness())->loginAdmin($admin);
			$admin = (new AdminRepository())->selectAdminByUsername($admin);

			if ($strStatus === "success" && Hash::check($request->strPassword, $admin->strPassword)){
				// session()->put('strUsername', $admin->strUsername);
				session()->put('adminId', $admin->adminId);
				return redirect('/');
			} else {
				session()->flash('login_error', 1);
				return redirect('/');
			}
		}

	}