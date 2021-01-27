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


        a.toppage{
            float:left;
            font-size:200%;
            font-weight:bold;
            padding:20px;
        }
        div.profile{
            clear:left;
            padding:70px 0 0 40px;
            margin:50px;
        }
        div.photo_frame{
            border: solid 3px #A4C6FF;
            border-radius: 8px;
            width:auto;
            height:auto;
            max-width:360px;
            max-height: 360px;
            padding:20px;
            background-color:#ffe4c4;
        }

        div.name_frame{
            position:relative;
            border: solid 3px #A4C6FF;
            border-radius: 8px;
            margin-left:40px;
            padding:20px;
            background-color:#FFFFFF;
        }
        div.birthday_frame{
            position:relative;
            border: solid 3px #A4C6FF;
            border-radius: 8px;
            margin-left:40px;
            margin-top:40px;
            padding: 20px;
            background-color:#FFFFFF;
        }
        div.mail_frame{
            position:relative;
            border: solid 3px #A4C6FF;
            border-radius: 8px;
            margin-left:40px;
            margin-top:40px;
            padding: 20px;
            background-color:#FFFFFF;
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
        }
        div.appeal{
            margin-top: 20px;
            margin-left:20px;
        }
        div.text{
            position:absolute;
            top:-30px;
            left:15px;
            background:#FFFFFF;
            font-weight:bold;
            font-size:130%;
            margin: 5px;
            padding:10px;
            border: solid 3px #A4C6FF;
            border-radius: 8px;
        }
        img{
            max-width:300px;
            max-height:300px;
            padding:20px;
            
        }
        button.remake_profile{
            margin:30px;
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
            font-weight:bold;
            font-size:200%;
            width:400px;
            padding:10px;
            background: linear-gradient(-135deg,#ffb6c1,#ff69b4);
            box-shadow:2px 2px 7px #000;
        }


        div.data{
            font-size:140%;
            padding:20px;
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
        <div class="profile">
            <div class="row">
                <div class="photo_frame col-sm-6">
                    <div class="text">プロフィール写真</div>
                    @if($my_data->photo_url == NULL)
                    <img src="../storage/facephoto_data/testdata01.png" class="photo">
                    @else
                    <img src="../storage/{{$my_data->photo_url}}" class="photo">
                    @endif
                </div>
                <div class="text_data col-sm-5">
                    <div class="name_frame frame">
                        <div class="text">ニックネーム</div>
                        <div class="name data">{{$my_data->NickName}}</div>
                    </div>
                    <div class="birthday_frame frame">
                        <div class="text">誕生日</div>
                        <div class="birthday data">{{$my_data->Birthday}}</div>
                    </div>
                    <div class="mail_frame frame">
                        <div class="text">メールアドレス</div>
                        <div class="mail data">{{$my_data->email}}</div>
                    </div>
                </div>
            </div>
        </div>

        <button class="remake_profile">プロフィール再設定</button>
        <button class="remake_password">パスワード再設定</button>
    </body>
    @endsection
</html>
