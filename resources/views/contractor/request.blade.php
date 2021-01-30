@extends('layouts.header')
@section('head')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>リクエスト</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<style>
        *{
            margin: 0px;
            padding: 0px;
        }
        a.toppage{
            font-size: 200%;
            margin:20px;
        }
        div.request-content{
            margin-top:30px;
            
        }
        input.submit{
            margin-top:30px;
            padding:10px;
            font-size:200%;
            font-weight:bold;
        }
        div.explain{
            margin-top:40px;
            margin-left:200px;
            padding:20px;
            font-size:150%;
            color: #FF0000;
            background-color: #FFFFFF;
            border:solid 4px #000000;
            border-radius:4px;
            display: inline-block;
        }
        textarea.form-control{
            font-size:200%;
        }

        input.btn{
            box-shadow: 4px 4px 2px #666666;
            width:300px;
            margin-left:100px;
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
<form action="/contractor/request_create?id={{$id}}" method="post">
@csrf
<div class="form-group">
        <div class="explain">こちらのフォームに提案等をお書きください。依頼者に送信します。</div>
        <div class="row request-content">
            <div class="col-sm-3"></div>
            <textarea class="request-content form-control col-sm-5" cols="30" rows="10" name="content"></textarea>
        </div>
        <div class="row submit">
            <div class="col-sm-4"></div>
            <input type="submit" class="btn btn-success submit" value="提案する"></input>
        </div>
        </div>
</form>
</body>
@endsection
</html>