<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebSourcing(仮)</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- <link rel = "stylesheet" type="text/css" href="{{asset('css/toppage.css')}}"> -->
        <style>
        *{
            margin: 0px;
            padding: 0px;
        }
            div#header {
                float:left;
                background-color: #8888FF;
                
                margin: 3px;
            }
            div.title{
                text-align: center;
                font-family: 'Montserrat', sans-serif;
                font-size: 350%;
                padding: 20px;
            }
            div#search-bar{
                float:left;
                
            }
            input.bar{
                padding: 2px;
                font-size: 200%;
            }
            input.search{
                font-size:180%;
            }
        </style>
    </head>
    <body>
       <div id="pagebody">
            
            <div id="header"><div class="title">WebSourcing</div></div>

            <div id="search-bar">
                <input type="text" name="search-word" class="bar">
                <input type="submit" name="submit" value="検索" class="search">
            </div>
       
       </div>
    </body>
</html>
