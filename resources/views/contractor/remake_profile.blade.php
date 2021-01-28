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

        div.content{
            margin-top:40px;
            margin-bottom:40px;
            font-size:150%;
        }
        input.form-control{
            font-size:110%;
        }
        select.form-control{
            font-size:110%;
        }
        textarea.form-control{
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

        input.fileSelect{
            display:none;
        }

        div.radio{
            padding-top:7px;
        }
        input.js-check{
            margin:10px;
        }
        input.fileSelect{
            margin-top:30px;
            margin-left:125px;
        }
        </style>

        <script>
            function formSwitch(){
                check = document.getElementsByClassName('js-check')
        if (check[0].checked) {
            fileSelect.style.display = "none";

        } else if (check[1].checked) {
            fileSelect.style.display = "block";

        } else {
            fileSelect.style.display = "block";
        }
    }
        </script>
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
     
     @if(false)
     <div class="error">

     </div>
     @endif

    <div class="row">
    <div class="col-sm-2"></div>


    <div class="card">
            <div class="card-header">
                <span class="head">パスワード再設定</span>
                
            </div>
            <div class="card-body">
                <form method="POST" action="/contractor/profile_validate" enctype="multipart/form-data">
                @csrf
                <div class="form-group">

                    <div class="content row">
                        <label for="nickname" class="col-md-4 col-form-label text-md-right">ニックネーム：</label>
                        <div class="col-md-5">
                            <input  type="text" class="form-control" name="nickname" value="{{$my_data->Nickname}}"></input>
                        </div>
                    </div>

                    <div class="content row">
                        <label for="birthday" class="col-md-4 col-form-label text-md-right">生年月日：</label>
                        <div class="col-md-5">
                        <input type="date" name="birthday" max="2005-12-31" class="form-control" value="{{$my_data->Birthday}}">
                        </div>
                    </div>

                    <div class="content row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">メールアドレス：</label>
                        <div class="col-md-5">
                        <input  type="email" class="form-control" name="email" value="{{$my_data->email}}"></input>
                        </div>
                    </div>

                    <div class="content row">
                    <label for="name" class="col-md-3 col-form-label text-md-right">プロフィール画像：</label>
                            <label>
                            <div class="radio">
                            <input class="js-check" type="radio" name="filechange" value="not_change" onclick="formSwitch()" checked="checked" >変更しない
                            </label>

                            <label>
                            <input class="js-check" type="radio" name="filechange" value="change" onclick="formSwitch()">変更する（ファイルを指定しない場合は初期設定となります。）
                            </label>
                            </div>

                            <input class="fileSelect" id="fileSelect" type="file" name="profile_photo"></input>

                    </div>

                    <div class="content row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">得意なカテゴリ：</label>
                        <div class="col-md-5">
                        <select id="category" class="form-control" name="category" placeholder="カテゴリ">
                                    @foreach($categories as $category)
                                    @if($category["Category_id"] == $my_data->category_id)
                                    <option value="{{ $category['Category_id']}}" selected>{{$category["Category_name"]}}</option>
                                    @else
                                    <option value="{{ $category['Category_id']}}">{{$category["Category_name"]}}</option>
                                    @endif
                                    @endforeach

                        </select>
                        </div>
                    </div>

                    <div class="content row">
                        <label for="appeal" class="col-md-4 col-form-label text-md-right">アピールポイント：</label>
                        <div class="col-md-5">
                        <textarea class="form-control" name="appealpoint">{!! $my_data->Appealpoint !!}</textarea>
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
