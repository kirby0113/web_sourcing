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

        <!-- <link rel = "stylesheet" type="text/css" href="{{asset('css/toppage.css')}}"> -->
        <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        body{
            background:
            radial-gradient(black 3px, transparent 4px),
            radial-gradient(black 3px, transparent 4px),
            linear-gradient(#fff 4px, transparent 0),
            linear-gradient(45deg, transparent 74px, transparent 75px, #a4a4a4 75px, #a4a4a4 76px, transparent 77px, transparent 109px),
            linear-gradient(-45deg, transparent 75px, transparent 76px, #a4a4a4 76px, #a4a4a4 77px, transparent 78px, transparent 109px),
            #fff;
            background-size: 109px 109px, 109px 109px,100% 6px, 109px 109px, 109px 109px;
            background-position: 54px 55px, 0px 0px, 0px 0px, 0px 0px, 0px 0px;
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
            form#search-bar{
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
            }
            div.category-title{
                position: absolute;
                background-color: #FFFFFF;
                padding:0px 6px;
                top: -15px;
                left: 30px; 
                font-size: 120%;
                font-weight:bold;
            }
            div.works{
                position: relative;
                margin: 10px;
                padding:10px;
                border: solid 3px #A4C6FF;
                border-radius:8px;
                background: #FFFFFF;
            }
            div.work-title{
                position:absolute;
                background-color: #FFFFFF;
                padding:0px 6px;
                top:-15px;
                left:30px;
                font-size: 120%;
                font-weight:bold;
            }

            a.category{
                padding: 5px;
                font-size: 200%;
                
            }
            div.work{
                padding: 5px;
                font-size: 200%;
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
                    <a href="/contractor/mypage">マイページ</a>
                    <a href="/contractor/logout">ログアウト</a>

                    <input type="button" name="DM" class="DM-button" value="ＤＭ">
                </div>
            </div>

            <form id="search-bar"　method="POST" class="row justify-content-center align-middle">
                <input type="text" name="search-word" class="bar">
                <input type="submit" name="submit" value="検索" class="search">
            </form>
            <div class="category-work row">
                <div class="categories col-sm-3">
                    <div class="category-title">カテゴリ置き場（仮）</div>
                    @foreach($categories as $category)
                    <a class="category" href="/contractor/category_search_result?id={{$category->Category_id}}">・{{$category->Category_name}}</a><br>
                    @endforeach
                </div>

                <div class="works col-sm-7">
                    <div class="work-title">依頼置き場（仮）</div>
                    @foreach($works as $work)
                    <div class="work">・{{$work->Title}}</div>
                    @endforeach
                </div>
            </div>
       
       </div>
    </body>
</html>
