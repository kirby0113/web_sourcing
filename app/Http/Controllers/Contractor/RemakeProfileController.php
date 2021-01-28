<?php

namespace App\Http\Controllers\Contractor;

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
        $categories = Category::All();
        $my_data = Auth::guard('contractor')->user();
        return view('contractor.remake_profile',compact('categories','my_data'));
    }


    public function validator(Request $request){

        $current_email = Auth::guard('contractor')->user()->email;
        $current_photo = Auth::guard('contractor')->user()->photo_url;

        if($request->nickname == null || $request->email == null || $request->appealpoint == null){
            $required_error = "入力していない項目があります。";
            return view('contractor.remake_profile',compact('required_error'));
        }

        if($request->email != $current_email){

        $rule = [
            'email' => ['required', 'string', 'max:255','unique:contractors'],
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
        return redirect('/contractor/remake_profile')
        ->withErrors($validator)
        ->withInput();

    }

    $update = Auth::guard('contractor')->user();
    $update->Nickname = $request->nickname;
    $update->email = $request->email;
    $update->Birthday = $request->birthday;
    $update->category_id = $request->category;
    $update->Appealpoint = $request->appealpoint;
    
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

        return redirect('/contractor/mypage'); 
    }
}
