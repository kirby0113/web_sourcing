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
                margin: 10px;
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
            }
            div.work-title{
                position:absolute;
                background-color: #FFFFFF;
                padding:0px 6px;
                top:-15px;
                left:30px;
                font-size: 120%;
                font-weight:bold;
                border: solid 3px #A4C6FF;
                border-radius:8px;
            }

            div.category{
                padding: 5px;
                font-size: 200%;
                
            }
            div.work{
                padding: 10px;
                padding-top:20px;
                padding-bottom:20px;
                font-size: 200%;
                border-bottom:dotted 2px #0000FF;
            }
            span.headanc{
                padding:-40px;
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
       <div class="pagebody container-fluid">
            

            <div class="category-work row">
                <div class="col-sm-2">
                </div>

                <div class="works col-sm-7">
                    <div class="work-title">今まで依頼したもの</div>
                    @foreach($myworks as $work)
                    <a href="/client/request_detail?id={{$work->Work_id}}"><div class="work">{{$work->Title}}</div></a>
                    @endforeach
                </div>
            </div>
       
       </div>
    </body>
    @endsection
</html>
