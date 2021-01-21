<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestDetailController extends Controller
{
    //
    public function index(Request $request){
        
        $work_requests = \App\Request::where('work_id',$request->id)->get();
        $work_id = $request->id;
       /* foreach($work_requests as $request){
            var_dump($request->contractor);
        } */
        return view('client.request_detail',compact('work_requests','work_id'));
    }
}
