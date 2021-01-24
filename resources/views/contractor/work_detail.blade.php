@extends('layouts.header')
@section('head')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>依頼詳細</title>

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
        div.title{
            font-weight: bold;
            font-size: 200%;
            margin-bottom:10px;
        }
        a.toppage{
            font-size: 200%;
            margin:20px;
        }
        div.work_frame{
            margin-top:100px;
            position: relative;
                margin-bottom:40px;
                padding:10px;
                border: solid 3px #A4C6FF;
                border-radius:8px;
                background: #FFFFFF;
        }
        div.content{
            font-size:150%;
            margin:20px;
        }
        div.content_frame{
            border-top: dotted 4px #A4C6FF;
            border-bottom: dotted 4px #A4C6FF;
        }
        div.client_name{
            margin-top:30px;
            font-size:140%;
        }
        div.fotter{
            margin-top:5px;
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
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="work_frame col-sm-6">
            <div class="row">
                <div class="title col-sm-4">依頼名：{{$work->Title}}</div>
                <div class="col-sm-5"></div>
                <div class="client_name col-sm-3">依頼者：{{$contractor->Nickname}}</div>
            </div>
        <div class="content_frame">
            <div class="contents">@foreach($contents as $content)
            <div class="content">{{$content}}</div><br>

            @endforeach</div>    
        </div>
        <div class="row fotter">
            <div class="category col-sm-4">カテゴリ: {{$category->Category_name}}</div>
            <div class="col-sm-5"></div>
            <div class="updated-at col-sm-3">最終更新日:{{$work->updated_at}}</div>
        </div>
        <div class="text-center">
        <a href="/contractor/request?id={{$id}}" class="application"><button type="button" class="btn btn-primary">申し込みする</button></a>
    </div>
        </div>
    </body>
    @endsection
</html>
