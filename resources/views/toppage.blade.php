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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <!-- <link rel = "stylesheet" type="text/css" href="{{asset('css/toppage.css')}}"> -->
        <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        div#header{
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
            input.DM-button{
                font-size:200%;
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
                margin : 10px;
            }   
        </style>
    </head>
    <body>
       <div class="pagebody container-fluid">
            
            <div id="header" class="row justify-content-start align-top">
                <div class="title-frame col-sm-3">
                    <div class="title">WebSourcing</div>
                </div>
                <div class="col-sm-2"></div>
                <div class="button col-sm-5 align-self-center">
                    <input type="button" name="mypage" class="mypage-button" value="マイページ">
                    <input type="button" name="login" class="login-button" value="ログイン">
                    <input type="button" name="DM" class="DM-button" value="ＤＭ">
                </div>
            </div>

            <div id="search-bar" class="row justify-content-center align-middle">
                <input type="text" name="search-word" class="bar">
                <input type="submit" name="submit" value="検索" class="search">
            </div>
            <div class="category-work row justify-content-end align-bottom">
                <div class="categories col-sm-6">
                    <div class="category">カテゴリ置き場（仮）</div>
                </div>

                <div class="works col-sm-6">
                    <div class="work">依頼置き場（仮）</div>
                </div>
            </div>
       
       </div>
    </body>
</html>
