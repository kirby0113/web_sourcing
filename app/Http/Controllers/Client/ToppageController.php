<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ToppageController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth:client');
    }

    public function index(){
        return view('client.toppage');
    }
}
