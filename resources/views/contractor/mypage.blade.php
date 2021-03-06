@extends('layouts.header')

@section('head')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>マイページ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <style>
        *{
            margin:0px;
            padding:0px;
        }

        div.profile{
            clear:left;
            padding:70px 0 0 40px;
        }
        div.photo_frame{
            border: solid 3px #A4C6FF;
            border-radius: 8px;
            width:auto;
            height:auto;
            max-width:360px;
            max-height: 360px;
            padding:20px;
            background-color:#E6FFE9;
            box-shadow:2px 2px 7px #000;
        }
        div.text_data{

        }
        div.name_frame{
            position:relative;
            border: solid 3px #A4C6FF;
            border-radius: 8px;
            margin-left:40px;
            padding:20px;
            background-color:#FFFFFF;
            box-shadow:2px 2px 7px #000;
        }
        div.birthday_frame{
            position:relative;
            border: solid 3px #A4C6FF;
            border-radius: 8px;
            margin-left:40px;
            margin-top:70px;
            padding: 20px;
            background-color:#FFFFFF;
            box-shadow:2px 2px 7px #000;
        }
        div.mail_frame{
            position:relative;
            border: solid 3px #A4C6FF;
            border-radius: 8px;
            margin-left:40px;
            margin-top:70px;
            padding: 20px;
            background-color:#FFFFFF;
            box-shadow:2px 2px 7px #000;
        }
        div.appeal_frame{
            float:left;
            position:relative;
            border: solid 3px #A4C6FF;
            border-radius: 8px;
            margin-top:40px;
            padding-top:10px;
            padding-bottom:10px;
            background-color:#FFFFFF;
            box-shadow:2px 2px 7px #000;
        }
        div.appeal{
            margin-top: 20px;
            margin-left:20px;
        }
        div.text{
            position:absolute;
            top:-60px;
            left:15px;
            background:#FFFFFF;
            font-weight:bold;
            font-size:150%;
            margin: 5px;
            border: solid 3px #A4C6FF;
            border-radius: 8px;
            padding:10px;
            box-shadow:2px 2px 7px #000;
            z-index:-999;
        }
        img{
            max-width:300px;
            max-height:300px;
            
        }
        div.remake_password{
            margin:30px;
            font-weight:bold;
            font-size:200%;
        }
        div.remake_profile{
            margin:30px;
            font-weight:bold;
            font-size:200%;
        }
        div.content{
            padding:20px;
            font-size:140%;
            padding-top:20px;
        }
        img.content{
            padding:20px;
        }
        button.remake_profile{
            margin:30px;
            margin-top:60px;
            font-weight:bold;
            font-size:200%;
            width:400px;
            border-radius:5px;
            padding:10px;
            background: linear-gradient(-135deg,#f0fa9a,#7cfc00);
            box-shadow:2px 2px 7px #000;
        }
        button.remake_password{
            margin:30px;
            margin-top:60px;
            font-weight:bold;
            font-size:200%;
            width:400px;
            padding:10px;
            background: linear-gradient(-135deg,#ffb6c1,#ff69b4);
            box-shadow:2px 2px 7px #000;
        }
        </style>
    </head>
    @endsection

    @if(!isset($check))

    @section('mypage')
   <a class="nav-link" href="/contractor/mypage"><span class="headanc">マイページ</span></a>
   @endsection

   @section('logout')
   <a class="nav-link" href="/contractor/logout"><span class="headanc">ログアウト</span></a>
   @endsection

   @section('DM')
   <a class="nav-link" href="/contractor/message_room_list"><span class="headanc">D M</span></a>
   @endsection

   @else

   @section('mypage')
   <a class="nav-link" href="/client/mypage"><span class="headanc">マイページ</span></a>
   @endsection

   @section('logout')
   <a class="nav-link" href="/client/logout"><span class="headanc">ログアウト</span></a>
   @endsection

   @section('DM')
   <a class="nav-link" href="/client/message_room_list"><span class="headanc">D M</span></a>
   @endsection

   @endif

   @section('main')
    <body>
        <div class="profile">
            <div class="row">
                <div class="photo_frame col-sm-5">

                    <div class="text">プロフィール写真</div>
                    @if($contractor_data->photo_url == null)
                    <img src="../storage/facephoto_data/testdata01.png" class="photo content">
                    @else
                    <img src="../{{$contractor_data->photo_url}}" class="photo content">
                    @endif
                </div>
                <div class="text_data col-sm-5">
                    <div class="name_frame">
                        <div class="text">ニックネーム</div>
                        <div class="name content">{{$contractor_data->Nickname}}</div>
                    </div>
                    <div class="birthday_frame">
                        <div class="text">誕生日</div>
                        <div class="birthday content">{{$contractor_data->Birthday}}</div>
                    </div>
                    <div class="mail_frame">
                        <div class="text">メールアドレス</div>
                        <div class="mail content">{{$contractor_data->email}}</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="appeal_frame col-sm-8">
                    <div class="text">アピールポイント</div>
                    <div class="appeal content">
                    @foreach($Appeals as $appeal)
                    {{$appeal}} <br>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

        @if(!isset($check))

        <button class="remake_profile" onclick="location.href='/contractor/remake_profile'">プロフィール再設定</button>
        <button  class="remake_password" onclick="location.href='/contractor/remake_password'">パスワード再設定</button>

        @endisset
    </body>
    @endsection
</html>
