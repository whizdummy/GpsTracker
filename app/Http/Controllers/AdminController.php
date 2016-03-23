<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Hash;
use App\Admin;
use App\Business\AdminBusiness;  
use App\Repository\AdminRepository;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin-view')
            ->with('admin_details', Admin::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin = new Admin;
        $admin->strUsername = $request->strUsername;
        $admin->strFirstName = $request->strFirstName;
        $admin->strMiddleName = $request->strMiddleName;
        $admin->strLastName = $request->strLastName;
        $admin->strPassword = Hash::make($request->strPassword);
        $admin->strGender = $request->strGender;
        $admin->strEmail = $request->strEmail;
        $admin->strContactNo = $request->strContactNo;
        $admin->txtPermanentAddress = $request->txtPermanentAddress;
        // $admin->txtCurrentAddress = $request->txtCurrentAddress;
        $admin->dateBirthday = $request->dateBirthday;
        // $admin->zipCode = $request->zipCode;
        $admin->boolStatus = 1;

        $strStatus = (new AdminBusiness())->createAdmin($admin);
        if($strStatus == 'success') {
            return redirect('admin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         // $admin = (new AdminRepository())->selectAdminById($id);
        $admin = Admin::where('adminId', $id)
                    ->where('boolStatus', 1)
                    ->first();

        session()->flash('adminUpdateId', $admin->adminId);
        return response()->json($admin);
    }

    public function showByName(Request $request){

        $admin = new Admin();
        $admin->strFirstName = $request->strFirstName;
        $admin->strMiddleName = $request->strMiddleName;
        $admin->strLastName = $request->strLastName;
        $admin = (new AdminRepository())->selectAdminByName($admin);

    }

    public function showByUsername(Request $request){

        $admin = new Admin();
        $admin->strUsername = $request->strUsername;
        $admin = (new AdminRepository())->selectAdminByUsername($admin);

    }

    public function showAll(){

        $adminList = (new AdminRepository())->selectAllAdmin();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $admin = Admin::find($id);

        $admin->strUsername = $request->strUsername;
        $admin->strFirstName = $request->strFirstName;
        $admin->strMiddleName = $request->strMiddleName;
        $admin->strLastName = $request->strLastName;
        // $admin->strPassword = Hash::make($request->strPassword);
        $admin->strGender = $request->strGender;
        $admin->strEmail = $request->strEmail;
        $admin->strContactNo = $request->strContactNo;
        $admin->txtPermanentAddress = $request->txtPermanentAddress;
        // $admin->txtCurrentAddress = $request->txtCurrentAddress;
        $admin->dateBirthday = $request->dateBirthday;
        // $admin->zipCode = $request->zipCode;
        $strStatus = (new AdminRepository())->updateAdmin($admin);

        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $strStatus = (new AdminRepository())->deactivateAdmin($id);
    }
}
