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

        <style>
        *{
            margin:0px;
            padding:0px;
        }
        div.title{
            font-weight: bold;
            font-size: 200%;

        }
        a.toppage{
            font-size: 200%;
        }
        div.work_frame{

        }
        </style>
    </head>
    <body>
     
     <a class="toppage" href="/toppage">トップページへ</a>
     <div class="row">
    <div class="work_frame">
        <div class="title">test</div>
        <div class="content_frame">
            <div class="content">test</div>    
        </div>
        <div class="category"></div>
        <div class="client">
            依頼者：<div class="client_name">test</div>
        </div>
        <a href="#" class="application">申し込みをする</a>
    </body>
</html>
