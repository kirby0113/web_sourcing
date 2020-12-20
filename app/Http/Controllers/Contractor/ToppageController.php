<?php

namespace App\Http\Controllers\Contractor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ToppageController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth:contractor');
    }

    public function index(){
        return view('contractor.toppage');
    }
}
