@extends('layouts.header')

@section('head')
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebSourcing(仮)_Contractor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <link rel = "stylesheet" type="text/css" href="{{asset('css/background.css')}}">

        <style>
            div.title{
                text-align: center;
                font-family: 'Montserrat', sans-serif;
                font-weight: normal;
                font-size: 3vmax;
                padding: 20px;
                letter-spacing: -3px;
            }

            form#search-bar{
               float: right;
               margin-top: 40px;
               margin-right: 100px;
            }
            div.button{
                display:flex;
                flex-direction: row;
                height:60px;
                justify-content: space-between;
            }
            div.form-group{
                font-size:150%;
                padding:10px;
                margin-right:20px;
            }
            button{
                font-size:200%;
                padding: 10px;
            }
            input.bar{
                padding: 2px;
                font-size: 200%;
                margin-right: 20px;
            }
            input.search{
                font-size:220%;
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
                box-shadow:2px 2px 7px #000;
            }
            div.category-title{
                position: absolute;
                background-color: #FFFFFF;
                padding:10px;
                top: -60px;
                left: 30px; 
                font-size: 140%;
                font-weight:bold;
                border:solid 3px #A4C6FF;
                border-radius:8px;
                box-shadow:2px 2px 7px #000;
                z-index:-999;
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
                font-size: 140%;
                font-weight:bold;
                border:solid 3px #A4C6FF;
                border-radius:8px;
                box-shadow:2px 2px 7px #000;
                z-index:-999;
            }

            div.category{
                padding: 5px;
                margin-top:20px;
                margin-bottom:20px;
                font-size: 200%;
                
            }
            div.work{
                padding: 5px;
                margin-top: 20px;
                margin-bottom:20px;
                
                font-size: 200%;
                border-bottom:dotted 2px #000000;
            }

            span.headanc{
                color:#0000cd;
                font-size:130%;
                font-family: 'Sawarabi Mincho', sans-serif;
                font-weight:bolder;
            }

            div.work-footer{
                padding-top: 20px;
            }

            span.work-category{
                margin-left:20px;
            }
            span.work-client{
                margin-left:20px;
            }

            span.work-created_at{
                font-size:90%;
                margin-left:20px;
            }

            div.f-second{
                margin-top:10px;
                margin-bottom:10px;
                font-size:80%;
            }

            div.anchor{
                font-size:150%;
                margin-top:-10px;
                font-weight:bold;
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
       <div class="pagebody container-fluid">
            <!--
            <div id="header" class="row justify-content-start align-top">
                <div class="title-frame col-sm-3">
                    <div class="title">WebSourcing</div>
                </div>
                <div class="col-sm-2"></div>
                <div class="button col-sm-5 align-self-center">
                    <a href="/contractor/mypage"><button>マイページ</button></a>
                    <a href="/contractor/logout"><button>ログアウト</button></a>

                    <a href="#"><button>DM</button></a>
                </div>
            </div> -->

            <form id="search-bar" action="/contractor/word_search_result" class="row justify-content-center align-middle",method="get">
                @csrf
                <div class="form-group">
                <input type="text" name="word" class="bar form-control">
                </div>
                <div class="form-group">
                <input type="submit"value="検索" class="search btn btn-secondary">
                </div>
            </form>
            <div class="category-work row">
                <div class="categories col-sm-3">
                    <div class="category-title">カテゴリ置き場（仮）</div>
                    @foreach($categories as $category)
                    <div class="category"><a href="/contractor/category_search_result?id={{$category->Category_id}}">・{{$category->Category_name}}</a></div>
                    @endforeach
                </div>

                <div class="works col-sm-7">
                    <div class="work-title">依頼置き場（仮）</div>
                    @foreach($works as $work)
                    <div class="work">
                        <div class="anchor">・<a href="/contractor/work_detail?id={{$work->Work_id}}">{{$work->Title}}</a></div>
                        <div class="work-footer">
                        <div class="f-first">
                        <span class="work-client">依頼者：{{$work->client->NickName}}</span>
                        <span class="work-category">カテゴリ：{{$work->category->Category_name}}</span>
                        </div>
                        <div class="f-second">
                        <span class="work-created_at">作成日時：{{$work->created_at}}</span>
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
       
       </div>
    </body>
    @endsection
</html>
