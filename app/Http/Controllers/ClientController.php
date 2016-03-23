<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Business\ClientBusiness;
use App\Repository\ClientRepository;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientList = Client::where('adminId', session()->get('adminId'))
                                ->get();
        return view('client-view')
            ->with('client_details', $clientList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client;
        $client->strFirstName = $request->strFirstName;
        $client->strMiddleName = $request->strMiddleName;
        $client->strLastName = $request->strLastName;
        // $admin->strPassword = Hash::make($request->strPassword);
        $client->strGender = $request->strGender;
        $client->strContactNo = $request->strContactNo;
        $client->txtAddress = $request->txtAddress;
        // $admin->txtCurrentAddress = $request->txtCurrentAddress;
        $client->dateBirthday = $request->dateBirthday;
        $client->deviceNo = $request->deviceNo;
        $client->strPlateNo = $request->strPlateNo;
        // $admin->zipCode = $request->zipCode;
        $client->adminId = $request->session()->get('adminId');
        $client->boolStatus = 1;

        $strStatus = (new ClientBusiness())->createClient($client);
        
        if ($strStatus === "success"){
            return redirect('client');
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
        $client = (new ClientRepository())->selectClientById($id);
        return response()->json($client);
    }

    public function showByName(Request $request){

        $client = new Client();
        $client->strFirstName = $request->strFirstName;
        $client->strMiddleName = $request->strMiddleName;
        $client->strLastName = $request->strLastName;
        $client = (new ClientRepository())->selectClientByName($client);

    }

    public function showByDeviceNo(Request $request){

        $client = new Client;
        $client->deviceNo = $request->deviceNo;
        $client = (new ClientRepository())->selectClientByDeviceNo($client);

    }

    public function showAll(){

        $clientList = (new ClientRepository())->getAllClient();

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
        $client = Client::find($id);
        $client->strFirstName = $request->strFirstName;
        $client->strMiddleName = $request->strMiddleName;
        $client->strLastName = $request->strLastName;
        // $admin->strPassword = Hash::make($request->strPassword);
        $client->strGender = $request->strGender;
        $client->strContactNo = $request->strContactNo;
        $client->txtAddress = $request->txtAddress;
        // $admin->txtCurrentAddress = $request->txtCurrentAddress;
        $client->dateBirthday = $request->dateBirthday;
        $client->deviceNo = $request->deviceNo;
        // $admin->zipCode = $request->zipCode;

        $strStatus = (new ClientRepository())->updateClient($client);
        return response()->json($strStatus);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $strStatus = (new ClientRepository())->deactivateClient($id);
    }
}
