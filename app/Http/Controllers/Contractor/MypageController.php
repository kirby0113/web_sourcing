<?php

namespace App\Http\Controllers\Contractor;

use Illuminate\Http\Request;
use App\Contractor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    //

    private $user;

    public function guard()
    {
        return Auth::guard('contractor');
    }

    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            $this->user = Auth::guard('contractor')->user();

            return $next($request);
        });
    }

    public function index(Request $request){
        $contractor_data = $this->user;
        $Appeals = Contractor::AppealpointExplode($contractor_data->Appealpoint);
        return view('contractor.mypage',compact('contractor_data','Appeals'));
    }
}
