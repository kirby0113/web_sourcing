<?php

namespace App\Http\Controllers\Contractor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Category;
use App\Work;

class ToppageController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth:contractor');
    }

    public function index(){
        $works = Work::where('finished',false)->orderBy('created_at','desc')->limit(10)->get();
        $categories = Category::All();
        return view('contractor.toppage',compact('works','categories'));
    }
}
