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
        </style>
    </head>
    <body>
        <h1>どちらで会員登録されますか？</h1>
        <a href="{{ route('client_register') }}">依頼する側として</a>
        <a href="{{ route('contractor_register')}}">依頼を受ける側として</a>
    </body>
</html>
