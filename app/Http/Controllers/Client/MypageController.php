<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    //
    public function index(){
        $my_data = Auth::guard('client')->user();
        return view('client.mypage',compact('my_data'));
    }
}
