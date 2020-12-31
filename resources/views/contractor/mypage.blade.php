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

        body{
            background:
            radial-gradient(black 3px, transparent 4px),
            radial-gradient(black 3px, transparent 4px),
            linear-gradient(#fff 4px, transparent 0),
            linear-gradient(45deg, transparent 74px, transparent 75px, #a4a4a4 75px, #a4a4a4 76px, transparent 77px, transparent 109px),
            linear-gradient(-45deg, transparent 75px, transparent 76px, #a4a4a4 76px, #a4a4a4 77px, transparent 78px, transparent 109px),
            #fff;
            background-size: 109px 109px, 109px 109px,100% 6px, 109px 109px, 109px 109px;
            background-position: 54px 55px, 0px 0px, 0px 0px, 0px 0px, 0px 0px;
        }

        a.toppage{
            float:left;
            font-size:200%;
            font-weight:bold;
            padding:20px;
        }
        div.profile{
            clear:left;
            padding:20px 0 0 40px;
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
            top:-20px;
            left:15px;
            background:#FFFFFF;
            font-weight:bold;
            font-size:150%;
            margin: 5px;
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
        </style>
    </head>
    <body>
        <a class="toppage" href="/contractor/toppage">←トップページ</a>
        <div class="profile">
            <div class="row">
                <div class="photo_frame col-sm-5">
                    <div class="text">プロフィール写真</div>
                    <img src="./storage/testdata01.png" class="photo">
                </div>
                <div class="text_data col-sm-5">
                    <div class="name_frame">
                        <div class="text">ニックネーム</div>
                        <div class="name">{{$contractor_data->Nickname}}</div>
                    </div>
                    <div class="birthday_frame">
                        <div class="text">誕生日</div>
                        <div class="birthday">{{$contractor_data->Birthday}}</div>
                    </div>
                    <div class="mail_frame">
                        <div class="text">メールアドレス</div>
                        <div class="mail">{{$contractor_data->email}}</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="appeal_frame col-sm-8">
                    <div class="text">アピールポイント</div>
                    <div class="appeal">
                    @foreach($Appeals as $appeal)
                    {{$appeal}} <br>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="remake_profile">プロフィール再設定</div>
        <div class="remake_password">パスワード再設定</div>
    </body>
</html>
