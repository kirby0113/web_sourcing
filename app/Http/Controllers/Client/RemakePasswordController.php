<?php

namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Client;

class RemakePasswordController extends Controller
{
    //
    public function index(){
        return view('client.remake_password');
    }

    public function validator(Request $request){
        $pass = Auth::guard('client')->user()->password;

        if($request->current_password == null || $request->new_password == null){
            $required_error = "入力していない項目があります。";
            return view('client.remake_password',compact('required_error'));
        }

        if(!Hash::check($request->current_password,$pass)){
            $difference_error = "パスワードが間違っています";
            return view('client.remake_password',compact('difference_error'));
        }
        
        $rule = [
            'current_password' => ['required'],
            'new_password' => ['required', 'string', 'min:8','confirmed'],
        ];
        $message = [
                'new_password.required' => '入力していない項目があります。',
                'confirmed' => '確認用パスワードは登録するものと同一のものを入力してください。',
                'min' => 'パスワードは８文字以上で入力してください。',
        ];

        $validator = Validator::make($request->all(), $rule, $message);
        //var_dump($validator->fails());

        if($validator->fails()){
            return redirect('/client/remake_password')
            ->withErrors($validator)
            ->withInput();

        }

        $update = Auth::guard('client')->user();
        $update->password = Hash::make($request->new_password);
        $update->update();

        return redirect('/client/mypage'); 
    }
}

