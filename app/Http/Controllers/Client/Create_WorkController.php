<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Category;
use App\Work;

class Create_WorkController extends Controller
{
    //

    public function index(){
        $categories = Category::All();

        return view('client.create_work',compact('categories'));


    }

    public function finish(Request $request){
            $work_id = $request->work_id;
            $update = Work::find($work_id);
            $update->finished = true;
            $update->save();

        return redirect('/client/toppage');
    }

    public function validation(Request $request){


        /*if($request->title == null || $request->content == null || $request->category == null){
            $required_error = "入力していない項目があります。";
            return redirect('/client/create_work',)->with('required_error',$required_error);
        } */

        $rule = [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required','string','max:1000'],
        ];
        $message = [
            'title.required' => '依頼名は必須項目です。',
            'content.required' => '依頼内容は必須項目です。',
            'title.max' => '依頼名は１００字以内で入力してください。',
            'string' => '文字列で入力してください。',
            'content.max' => '依頼内容は１０００文字以内で入力してください。',
        ];

        $validator = Validator::make($request->all(), $rule, $message);
        //var_dump($validator->fails());
    
        if($validator->fails()){
            return redirect('/client/create_work')
            ->withErrors($validator)
            ->withInput();
    
        }

            $insert = new Work;
            $insert->client_id = Auth::guard('client')->user()->Client_id;
            $insert->Title = $request->title;
            $insert->Category_id = $request->category;
            $insert->Contents = $request->content;
            $insert->save();
            return redirect('/client/toppage');


    }
}
