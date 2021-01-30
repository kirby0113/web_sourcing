@extends('layouts.header')

@section('head')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebSourcing(仮)_Client</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <link rel = "stylesheet" type="text/css" href="{{asset('css/toppage.css')}}"> 
        <style>
        *{
            margin: 0px;
            padding: 0px;
        }

            div.title-frame {
                
                background-color: #C2EEFF;
                
                margin: 19px;
            }
            div.title{
                text-align: center;
                font-family: 'Montserrat', sans-serif;
                font-weight: normal;
                font-size: 3vmax;
                padding: 20px;
                letter-spacing: -3px;
            }
            div#search-bar{
               float: right;
               margin: 10px;
               margin-right: 100px;
            }
            div.button{
                display:flex;
                flex-direction: row;
                height:60px;
                justify-content: space-between;
            }
            input.mypage-button{
                font-size:200%;
            }
            input.login-button{
                font-size:200%;
            }
            button{
                font-size:200%;
                padding:10px;
            }  
            input.bar{
                padding: 2px;
                font-size: 200%;
            }
            input.search{
                font-size:180%;
            }   
            div.category-work{
                clear:right;
                margin-top: 100px;
                padding: 30px 0px;
            }  
            
            div.categories{
                position: relative;
                margin: 10px;
                padding: 10px;
                border: solid 3px #A4C6FF;
                border-radius: 8px;
                background: #FFFFFF;
            }
            div.category-title{
                position: absolute;
                background-color: #FFFFFF;
                padding:0px 6px;
                top: -15px;
                left: 30px; 
                font-size: 120%;
                font-weight:bold;
            }
            div.works{
                position: relative;
                margin: 10px;
                padding:10px;
                border: solid 3px #A4C6FF;
                border-radius:8px;
                background: #FFFFFF;
                box-shadow:2px 2px 7px #000;
            }
            div.work-title{
                position:absolute;
                background-color: #FFFFFF;
                padding:10px;
                top:-60px;
                left:30px;
                font-size: 150%;
                font-weight:bold;
                border: solid 3px #A4C6FF;
                border-radius:8px;
                box-shadow:2px 2px 7px #000;
                z-index:-999;
            }

            div.category{
                padding: 5px;
                font-size: 200%;
                
            }
            div.work{
                padding-top:20px;
                padding-bottom:20px;
                padding-left:20px;
                font-size: 250%;
                font-weight:bold;
            }
            div.work_frame{
                border-bottom:dotted 2px #0000FF;
                padding:30px;
                position:relative;
            }
            div.not_finish{
                background: linear-gradient(-135deg,#00ff7f,#7fffd4);
                border:solid 3px #000000;
                box-shadow: 4px 4px 7px #666666;
                padding:20px;
            }
            div.finished{
                background: linear-gradient(-135deg,#00ff7f,#7fffd4);
                border:solid 3px #000000;
                box-shadow: 4px 4px 7px #666666;
                padding:20px;
            }
            span.headanc{
                padding:-40px;
            }

            button.new-work{
                font-size:250%;
                font-weight:bold;
                padding:30px;
                width:600px;
                text-align:center;
                margin-top:100px;
                margin-left:650px;
                border-radius:6px;
                background: linear-gradient(-135deg,#00ff7f,#7fffd4);
                border:solid 3px #000000;
                box-shadow: 4px 4px 4px #666666;
            }

            span.created_at{
                font-size:150%;
                margin-left:20px;
            }

            span.category{
                font-size:150%;
                margin-left:20px;
            }
            span.finish_text{
                font-size:150%;
                margin-left:20px;
                color:#ff0000;
            }

            button.finish_button{
                font-size:200%;
                font-weight:bold;
                padding:30px;
                border-radius:6px;
                background: linear-gradient(-135deg,#ffc0cb,#ffb6c1);
                border:solid 3px #000000;
                box-shadow: 4px 4px 4px #666666;
            }
            span.button{
                position:absolute;
                top:80px;
                left:800px;
                display:inline-block;
            }
        </style>

            <script>
    function check(work_id){
       var room_close_check = confirm("この依頼を完了してもよろしいですか？（完了した場合、これ以上の提案の募集などが不可能となります。）");
       if(room_close_check){
            location.href="/client/work_finish?work_id=" + work_id;
       }
    }
    </script>
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
       <div class="pagebody container-fluid">

       <button class="new-work" onclick="location.href='/client/create_work'">新しく依頼を作成する</button>
            

            <div class="category-work row">
                <div class="col-sm-2">
                </div>

                <div class="works col-sm-7">
                    <div class="work-title">今まで依頼したもの</div>
                    @foreach($myworks as $work)
                    <div class="work_frame">
                    @if($work->finished == false)
                    <div class="not_finish">
                    <a href="/client/request_detail?id={{$work->Work_id}}"><div class="work">・{{$work->Title}}</div></a>
                    <span class="category">カテゴリ：{{$work->category->Category_name}}</span><br>
                    <span class="created_at">作成日時：{{$work->created_at}}</span><br>

                    <span class="button"><button class="finish_button btn" onclick="check({{$work->Work_id}})">依頼を終了する</button></span>
                    </div>
                    @else
                    <div class="finished">
                    <div class="work">・{{$work->Title}}</div>
                    <span class="category">カテゴリ：{{$work->category->Category_name}}</span><br>
                    <span class="created_at">作成日時：{{$work->created_at}}</span><br>
                    <span class="finish_text">この依頼は終了済みです。</span><br>
                    </div>
                    @endif
                    </div>
                    @endforeach
                </div>
            </div>
       
       </div>
    </body>
    @endsection
</html>
