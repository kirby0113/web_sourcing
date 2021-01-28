@extends('layouts.header')

@section('head')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        *{
            margin:0px;
            padding:0px;
        }

        div.card{
            margin-top:50px;
            width:1300px;
            border:solid 2px #000000;
        }
        div.card-header{
            border-bottom:solid 2px #000000;
            font-size:150%;
        }

        div.password{
            margin-top:40px;
            margin-bottom:40px;
        }
        div.password{
            font-size:150%;
        }
        input.form-control{
            font-size:110%;
        }

        span.error{
                color:#ff0000;
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
        input.button{
            font-size:150%;
            padding:10px;
        }

        div.card-body{
            background: linear-gradient(-90deg,#fffacd,#fafad2);
        }
        </style>
    </head>
    @endsection

    
    @section('mypage')
    <a class="nav-link" href="/contractor/mypage"><span class="headanc">マイページ</span></a>
    @endsection

    @section('logout')
    <a class="nav-link" href="/contractor/logout"><span class="headanc">ログアウト</span></a>
    @endsection

    @section('DM')
    <a class="nav-link" href="/contractor/message_room_list"><span class="headanc">D M</span></a>
    @endsection

    @section('main')
    <body>
    @if(isset($required_error))
    <div class="error">
                                    <span>
                                        <strong>・{{ $required_error }}</strong>
                                    </span>
                                    </div>
                @endif

                @if(isset($difference_error))
                </div class="error">
                                    <span>
                                        <strong>・{{ $difference_error }}</strong>
                                    </span>
                                    </div>
                        @endif
                        
                        @error('new_password')
                        <div class="error">
                        @foreach($errors->get('new_password') as $error)

                                    <div>
                                        <strong>・{{$error}}</strong>
                                    </div>
                        @endforeach
                        </div>
                        @enderror
    <div class="row">
    <div class="col-sm-2"></div>


    <div class="card">
            <div class="card-header">
                <span class="head">パスワード再設定</span>
                
            </div>
            <div class="card-body">
                <form method="POST" action="/contractor/password_validate">
                @csrf
                <div class="form-group">

                    <div class="current password row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">現在のパスワード：</label>
                        <div class="col-md-4">
                            <input  type="password" class="form-control" name="current_password"></input>
                        </div>
                    </div>

                    <div class="new password row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">新しく設定するパスワード：</label>
                        <div class="col-md-4">
                        <input  type="password" class="form-control" name="new_password"></input>
                        </div>
                    </div>

                    <div class="new password row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">パスワード確認用：</label>
                        <div class="col-md-4">
                        <input  type="password" class="form-control" name="new_password_confirmation"></input>
                        </div>
                    </div>
                    <div class="row">
                    <input type="submit" class="button btn btn-primary mx-auto" value="変更"></input>
                    </div>
                </div>

                </form>
            </div>
    </div> 

    </div>
     
    </body>
    @endsection
</html>
