<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnterController extends Controller
{
    //
    public function index(){
                return view('enter');
    }

    public function contractor_index(){
        if(Auth::guard('contractor')->check()){
        return redirect('/contractor/toppage');
        }else{
            return view('enter');
        }
    }

    public function client_index(){
        if(Auth::guard('client')->check()){
        return redirect('/client/toppage');
        }else{
            return view('enter');
        }
    }
}
