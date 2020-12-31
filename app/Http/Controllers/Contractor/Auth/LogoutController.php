<?php

namespace App\Http\Controllers\Contractor\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //
    public function logout(Request $request){
        Auth::guard('contractor')->logout();
        return redirect()->route('contractor.login');
    }
}
