<?php

namespace App\Http\Controllers\Contractor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    //
    public function store(Request $request){
        $insert = new \App\Request;
        $contractor = Auth::guard('contractor')->user();
        $insert->contractor_id = $contractor->Contractor_id;
        $insert->contents = $request->content;
        $insert->work_id = $request->id;
        $insert->save();
         return redirect('/contractor/toppage');
    }

    public function index(Request $request){
        $id = $request->id;
        return view('contractor.request',compact('id'));
    }
}
