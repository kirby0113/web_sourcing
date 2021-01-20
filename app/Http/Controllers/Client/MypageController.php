<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contractor;

class MypageController extends Controller
{
    //
    public function index(){
        $my_data = Auth::guard('client')->user();
        return view('client.mypage',compact('my_data'));
    }

    public function show(Request $request){
        $contractor_data = Contractor::find($request->id);
        $Appeals = Contractor::AppealpointExplode($contractor_data->Appealpoint);
        return view('contractor.mypage',compact('contractor_data','Appeals'));
    }
}
