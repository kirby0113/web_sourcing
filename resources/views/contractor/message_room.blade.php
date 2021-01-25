@extends('layouts.header')

@section('head')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <style>
        *{
            margin:0px;
            padding:0px;
        }

        a.back{
            font-size:300%;
            font-weight:bold;
            margin-left:60px;
        }


        div.room_title{
            border:solid 4px #000000;
            border-radius: 6px;
            display:inline-block;
            font-size:200%;
            font-weight:bold;
            margin-top:100px;
            margin-left:500px;
            margin-bottom:100px;
            padding:10px;
            background-color: #FFFFFF;
        }

        input.submit{
            margin-left:30px;
        }

        div.message_frame{
            padding:20px;
            margin-top:40px;
            margin-bottom:40px;
            border:solid 4px;
            border-radius:4px;
            background-color:#FFFFFF;
        }

        div.client{
            border-color:#FF0000;
        }

        div.contractor{
            border-color: #0000FF;
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

    <div class="room_title"><span>{{$room->work->Title}}</span></div>

    <form class="message_form" action="/client/message_create?room_id={{$room->Room_id}}" method="post">
    @csrf
            <span class="row message-content">
                <div class="col-sm-4"></div>
                <div class="text">
                    <textarea class="request-content" cols="75" rows="3" name="message"></textarea>
                </div>
                <input type="submit" class="btn btn-primary submit"></input>
            </span>
    </form>

    @foreach($messages as $message)
    <div class="row">
        <div class="col-sm-3"></div>

        @if($message->made == 'client')
        <div class="message_frame client col-sm-5 ">
            <div class="content">
                {!! $message->Message !!}
            </div>

            <div class="message_fotter">
                <a href="/client/contractor_show?id={{$message->client->Client_id}}" class="client_name">送信者：{{$message->client->Nickname}}</a>
                <span class="requested_date">送信日時：{{$message->created_at}}</span>
            </div>

        </div>
        @else
        <div class="message_frame contractor col-sm-5 ">
            <div class="content">
                {!! $message->Message !!}
            </div>

            <div class="message_fotter">
                <a href="/client/contractor_show?id={{$message->contractor->Contractor_id}}" class="contractor_name">送信者：{{$message->contractor->Nickname}}</a>
                <span class="requested_date">送信日時：{{$message->created_at}}</span>
            </div>

        </div>
        @endif

        @endforeach
    </div>
</body>
@endsection
</html>