<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebSourcing(仮)</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <!-- <link rel = "stylesheet" type="text/css" href="{{asset('css/toppage.css')}}"> -->
        <style>
        *{
            margin: 0px;
            padding: 0px;
        }
            div#header {
                
                background-color: #8888FF;
                text-align: left;
                display: inline-block;
                margin: 3px;
            }
            div.title{
                text-align: center;
                font-family: 'Montserrat', sans-serif;
                font-size: 350%;
                padding: 20px;
            }
        </style>
    </head>
    <body>
       <div id="pagebody">
            
            <div id="header"><div class="title">WebSourcing</div></div>

       </div>
    </body>
</html>
