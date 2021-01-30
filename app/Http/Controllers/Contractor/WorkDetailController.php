<?php

namespace App\Http\Controllers\Contractor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Work;

class WorkDetailController extends Controller
{
    //

    public function index(Request $request){
        $work = Work::find($request->id);
        $contents = Work::ContentsExplode($work->Contents);
        $client = $work->client;
        $category = $work->category;
        $id = $request->id;
        return view('contractor.work_detail',compact('work','client','category','contents','id'));
    }
}
