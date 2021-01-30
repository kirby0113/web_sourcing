@extends('layouts.header')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @section('head')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebSourcingへようこそ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
        *{
            margin:0px;
            padding:0px;
        }
        div.contractor_frame{
            border:solid 4px #000000;
            border-radius: 8px;
            background-color: #ffffff;
            padding: 20px;
            margin-top:90px;
        }

        div.client_frame{
            border:solid 4px #000000;
            border-radius: 8px;
            background-color: #ffffff;
            padding: 20px;
            margin-top:90px;
            position:relative;
        }

        div.head{
            padding:15px;
            position:absolute;
            top:-72px;
            left:20px;
            border:solid 4px #000000;
            border-radius: 8px;
            background-color: #ffffff;
            font-size:140%;
            font-weight:bold;
        }
        button{
            padding:20px;
            margin:60px;
            margin-top:40px;
            margin-bottom:40px;
            width:500px;
            font-size:240%;
            font-weight:bold;
            text-shadow:1px 1px 0px #000000;
            border-radius:8px;
            background: linear-gradient(-135deg,#e0ffff,#afeeee);
        }

        button:hover{
            opacity: 0.6;
        }

        div.logo{
            margin:40px;
            font-size:250%;
            font-weight:bold;
            color:#665566;
        }


        </style>
    </head>
    @endsection
    <body>

        @section('main')
        <div class="logo">WebSourcing(仮)へようこそ</div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-4 contractor_frame">
                <div class="head">依頼を受ける側として</div>
                <button class="contractor_login" onclick="location.href='contractor/login'">ログイン</button></button></br>
                <button class="contractor_register" onclick="location.href='contractor/register'">新規登録</button></button>

            </div>
            <div class="col-sm-2"></div>

            <div class="col-sm-4 client_frame">
                <div class="head">依頼をする側として</div>
                <button class="client_login" onclick="location.href='client/login'">ログイン</button></br>
                <button class="client_register" onclick="location.href='client/register'">新規登録</button>

            </div>
        </div>
        @endsection
    </body>
</html>
