<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestDetailController extends Controller
{
    //
    public function index(Request $request){
        
        $work_requests = \App\Request::where('work_id',$request->id)->where('approved',false)->get();
        $work_id = $request->id;
       /* foreach($work_requests as $request){
            var_dump($request->contractor);
        } */
        if(count($work_requests) != 0){
        return view('client.request_detail',compact('work_requests','work_id'));
    }else{
        return view('client.request_detail',compact('work_id'));
    }
    }
}
