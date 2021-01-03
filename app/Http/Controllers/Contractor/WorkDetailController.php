<?php

namespace App\Http\Controllers\Contractor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Work;

class WorkDetailController extends Controller
{
    //

    public function index(Request $request){

        return view('contractor.work_detail');
    }
}
