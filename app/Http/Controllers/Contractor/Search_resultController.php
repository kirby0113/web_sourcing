<?php

namespace App\Http\Controllers\Contractor;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Work;
use App\Category;

class Search_resultController extends Controller
{
    //

    public function category_search(Request $request){
        $results = Work::category_pickup($request->id);
        $category = Category::find($request->id);
        $id = $request->id;
        return view('contractor/search_result',compact('results','category','id'));
    }
    
    public function word_search(Request $request){
        $word = $request->word;
        $words = explode(" ",$word);
        $results = Work::word_pickup($words);
        return view('contractor/search_result',compact('results','word'));
    }
}
