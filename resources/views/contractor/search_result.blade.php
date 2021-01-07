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

        a.toppage{
            font-size:200%;

        }
        a.mypage{
            font-size:200%;
        }
        div.search-detail{
            font-size:200%;
        }
        div.top{
            margin:20px;
        }
        input{
            font-size:150%;
        }
        div.search{
            margin:40px;
        }
        div.result_frame{
            position: relative;
                margin-top: 80px;
                margin-bottom:40px;
                padding:10px;
                border: solid 3px #A4C6FF;
                border-radius:8px;
                background: #FFFFFF;
        }
        div.title{
            font-weight:bold;
            font-size:200%;
        }
        div.paginate{
            font-size:200%;
        }
        </style>
    </head>
    <body>
    <div class="row top">
        <a class="toppage col-sm-4" href="/contractor/toppage">トップページへ</a>
        <div class="col-sm-4"></div>
        <a class="mypage col-sm-4" href="/contractor/mypage">マイページ</a>
    </div>
    
    <div class="search row">
    <div class="search-detail col-sm-6">
            @isset($category)
                カテゴリ:{{$category->Category_name}}の検索結果
            @endisset

            @isset($word)
                ワード：{{$word}}の検索結果
            @endisset
    </div>
    <div class="col-sm-2"></div>
    <form id="search-bar" class="col-sm-4" action="/contractor/word_search_result" ,method="get">
            <input type="text" name="word" value="{{$word ?? ''}}" class="bar">
            <input type="submit" name="submit" value="検索" class="search">
    </form>
    </div>

    <div class="row container">
        <div class="col-sm-3"></div>
        <div class="col-sm-5">
            @foreach($results as $result)
            <div class="result_frame">
                <a href="/contractor/work_detail?id={{$result->Work_id}}"><div class="title">{{$result->Title}}</div></a>
            </div>
            @endforeach
        </div>
        
        @isset($word)
        <div class="paginate">{{$results->appends(['word'=>$word])->render()}}</div>
        @endisset

        @isset($category)
        <div class="paginate">{{$results->appends(['id'=>$id])->render()}}</div>
        @endisset
    </div>
    </body>
</html>
