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
        $contractor = $work->contractor;
        $category = $work->category;
        return view('contractor.work_detail',compact('work','contractor','category','contents'));
    }
}
