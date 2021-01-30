<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

use App\Category;

class RemakeProfileController extends Controller
{
    //
    public function index(){
        $my_data = Auth::guard('client')->user();
        return view('client.remake_profile',compact('my_data'));
    }


    public function validator(Request $request){

        $current_email = Auth::guard('client')->user()->email;
        $current_photo = Auth::guard('client')->user()->photo_url;

        if($request->nickname == null || $request->email == null){
            $required_error = "入力していない項目があります。";
            return view('client.remake_profile',compact('required_error'));
        }

        if($request->email != $current_email){

        $rule = [
            'email' => ['required', 'string', 'max:255','unique:clients'],
        ];
        $message = [
            'required' => '入力していない項目があります。',
            'string' => 'メールアドレスは文字列で入力してください。',
            'max' => 'メールアドレスは２５５文字以内で入力してください。',
                'unique' => 'すでにそのemailは使用されています。',
        ];
    }else{
        $rule = [
            'email' => ['required', 'string', 'max:255'],
        ];
        $message = [
                'required' => '入力していない項目があります。',
                'string' => 'メールアドレスは文字列で入力してください。',
                'max' => 'メールアドレスは２５５文字以内で入力してください。',
        ];

    }

    $validator = Validator::make($request->all(), $rule, $message);
    //var_dump($validator->fails());

    if($validator->fails()){
        return redirect('/client/remake_profile')
        ->withErrors($validator)
        ->withInput();

    }

    $update = Auth::guard('client')->user();
    $update->NickName = $request->nickname;
    $update->email = $request->email;
    $update->Birthday = $request->birthday;
    
    if(strcmp($request->filechange,"change") == 0){
        var_dump($request->profile_photo);
        if($request->profile_photo != null){
        $date = date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
        $date_hash = hash( "sha256", $date);
        $name = $request->profile_photo->getClientOriginalName();
        //var_dump($name);
        Storage::putFileAs('public/facephoto_data/',$request->profile_photo,$date_hash.$name);
        Storage::delete($current_photo);
        $update->photo_url =  'storage/facephoto_data/'.$date_hash.$name;
        }else{
            Storage::delete($current_photo);
            $update->photo_url = NULL;
        }
    }
    $update->update();

        return redirect('/client/mypage'); 
    }
}