@extends('layouts.header')

@section('head')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>新規依頼作成</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        *{
            margin:0px;
            padding:0px;
        }
        div.form-group{
            position:relative;
            border:solid 4px #000000;
            border-radius:5px;
            background: #ffffff;
            width:1500px;
            margin-top:200px;
            margin-left:250px;
            font-size:150%;
            background: linear-gradient(-135deg,#f0f8ff,#e6e6fa);
            box-shadow:2px 2px 7px #000;
        }
        div.form{
            margin-top:40px;
            margin-bottom:40px;
        }
        label{
            font-weight:bold;
        }
        div.input{
            margin-top:10px;
        }
        div.submit{
            margin-top:30px;
            margin-bottom:30px;
        }
        input.button{
            font-size:150%;
            font-weight:bold;
            width:200px;
        }
        div.h{
            position:absolute;
            z-index:-999;
                top:-91px;
                left:30px;
                padding:10px;
                font-size:180%;
                font-weight:bold;
                border-top:solid 3px #000000;
                border-left:solid 3px #000000;
                border-right:solid 3px #000000;
                background: linear-gradient(-135deg,#f0f8ff,#e6e6fa);
                border-radius:5px;
                box-shadow:2px 2px 7px #000;
        }
        input.button{
            box-shadow:2px 2px 7px #000;
        }

        div.error{
                color:#ff0000;
                border:solid 6px #FF0000;
                background-color:#FFFFFF;
                border-radius:6px;
                display:inline-block;
                margin-left:500px;
                margin-top:100px;
                padding:50px;
                font-size:150%;

        }
        </style>
    </head>
    @endsection

    
    @section('mypage')
    <a class="nav-link" href="/client/mypage"><span class="headanc">マイページ</span></a>
    @endsection

    @section('logout')
    <a class="nav-link" href="/client/logout"><span class="headanc">ログアウト</span></a>
    @endsection

    @section('DM')
    <a class="nav-link" href="/client/message_room_list"><span class="headanc">D M</span></a>
    @endsection

    @section('main')
    <body>

                        @if($errors->has('title') || $errors->has('content') ||$errors->has('category') )
                        <div class="error">
                        @foreach($errors->all() as $error)

                                    <div>
                                        <strong>・{{$error}}</strong>
                                    </div>
                        @endforeach
                        </div>
                        @endif
                        
        <form method="post" action="work_validate">
            @csrf
            <div class="form-group">
            <div class="h">依頼作成</div>
                <div class="title-form form row">
                    <label for="birthday" class="col-md-4 col-form-label text-md-right">依頼名（１００字以内）：</label>
                    <div class="col-md-5 input">
                    <input type="text" class="form-control" name="title" value="{{ old('title')??'' }}"></input>
                    </div>

                </div>

                <div class="content-form form row">
                <label for="birthday" class="col-md-4 col-form-label text-md-right">依頼内容（１０００字以内）：</label>
                <div class="col-md-6 input">
                    <textarea class="form-control" name="content" cols="30" rows="20">{{ old('content')??'' }}</textarea>
                    </div>
                </div>

                <div class="category-form form row">
                <label for="birthday" class="col-md-4 col-form-label text-md-right">カテゴリ：</label>
                        <div class="col-md-3 input">
                        <select id="category" class="form-control" name="category" placeholder="カテゴリ">
                                    @foreach($categories as $category)
                                    @if($category["Category_id"] == 1)
                                    <option value="{{ $category['Category_id']}}" selected>{{$category["Category_name"]}}</option>
                                    @else
                                    <option value="{{ $category['Category_id']}}">{{$category["Category_name"]}}</option>
                                    @endif
                                    @endforeach

                        </select>
                        </div>
                </div>

                <div class="row submit">
                    <input type="submit" class="button btn btn-primary mx-auto" value="投稿"></input>
                    </div>
            </div>
        </form>
     
    </body>
    @endsection
</html>
