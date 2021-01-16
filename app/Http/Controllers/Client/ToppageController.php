<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Work;

class ToppageController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth:client');
    }

    public function index(Request $request){
        $client_data = Auth::guard('client')->user();
        $myworks = Work::getWork_Client($client_data->Client_id);
        return view('client.toppage',compact('myworks'));
    }
}
