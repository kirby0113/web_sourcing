@extends('layouts.header')

@section('head')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>検索結果</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
                <link rel = "stylesheet" type="text/css" href="{{asset('css/background.css')}}">

        <style>
        *{
            margin:0px;
            padding:0px;
        }
        span.headanc{
                color:#0000cd;
                font-size:130%;
                font-family: 'Sawarabi Mincho', sans-serif;
                font-weight:bolder;
            }

        a.toppage{
            font-size:200%;

        }
        a.mypage{
            font-size:200%;
        }
        div.search-detail{
            font-size:200%;
            font-weight:bold;
            margin-left:50px;
            margin-top:130px;
        }
        div.top{
            margin:20px;
        }
        input.form-control{
            font-size:200%;
            width:500px;
            margin-right:50px;
            padding:10px;
        }

        div.result_frame{
            position: relative;
                margin-top: 80px;
                margin-bottom:40px;
                padding:10px;
                border: solid 3px #A4C6FF;
                border-radius:8px;
                background: #FFFFFF;
                box-shadow:2px 2px 7px #000;
        }
        div.title{
            font-weight:bold;
            font-size:300%;
        }
        div.paginate{
            font-size:150%;
            text-align:center;
        }

        div.search_bar{
            margin-top:70px;
            margin-left:40px;
        }

        input.btn-secondary{
            font-size:200%;
            margin-top:-10px;
            padding:10px;
        }

        span.bar{
            display:inline-block;
        }
        div.fotter{
            font-size:140%;
            padding:20px;
        }
        span.category{
            margin-top:10px;
        }
        span.created_at{
            margin-left:20px;
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
    
    <div class="search row">
    <div class="search-detail col-sm-3">
            @isset($category)
                カテゴリ:{{$category->Category_name}}の検索結果
            @endisset

            @isset($word)
                ワード：{{$word}}の検索結果
            @endisset
    </div>
    <form id="search-bar" class="col-sm-5 search-bar" action="/contractor/word_search_result" ,method="get">
    <div class="search_bar">
            <span class="bar"><input type="text" name="word" value="{{$word ?? ''}}" class="form-control"></input></span>
            <span class="search"><input type="submit" name="submit" value="検索" class="search btn btn-secondary"></input></span>
            </div>
    </form>
    </div>

    <div class="row container">
        <div class="col-sm-3"></div>
        <div class="col-sm-9">
            @foreach($results as $result)
            <div class="result_frame">
                <a href="/contractor/work_detail?id={{$result->Work_id}}"><div class="title">・{{$result->Title}}</div></a>
                <div class="fotter">
                <div class="client">依頼者：{{$result->client->NickName}}</div>
                <span class="category">カテゴリ：{{$result->category->Category_name}}</span><span class="created_at">作成日時：{{$result->created_at}}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
        
        @isset($word)
        <div class="row">
        <div class="col-sm-3"></div>
        <div class="paginate">{{$results->appends(['word'=>$word])->render()}}</div>
        </div>
        @endisset

        @isset($category)
        <div class="row">
        <div class="col-sm-3"></div>
        <div class="paginate">{{$results->appends(['id'=>$id])->render()}}</div>
        </div>
        @endisset
    </body>
    @endsection
</html>
