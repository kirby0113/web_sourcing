@extends('layouts.header')

@section('head')
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DM一覧</title>

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

        div.room_frame_nofinish{
            padding:20px;
            margin-top:40px;
            margin-bottom:40px;
            border:solid 4px;
            border-radius:4px;
            background: linear-gradient(-135deg,#e0ffff,#afeeee);
            color:#000000;
            border-color: #b0e0e6;
            box-shadow:2px 2px 7px #000;
        }

        
        div.room_frame_finish{
            padding:20px;
            margin-top:40px;
            margin-bottom:40px;
            border:solid 4px;
            border-radius:4px;
            background: linear-gradient(-135deg,#ffb6c1,#ffe4e1);
            color:#000000;
            border-color: #b0e0e6;
            box-shadow:2px 2px 7px #000;
        }

        span.created_date{
            margin-left:50px;
        }

        div.title{
            padding-top:20px;
            padding-bottom:20px;
            border-bottom:dotted 3px #000000;
            font-size:250%;
            font-weight:bold;

        }

        div.room_fotter{
            padding-top:20px;
            padding-bottom:20px;
            border-bottom:dotted 3px #000000;
            display:block;
            text-align:right;
            font-size:130%;

        }

        div.finished{
            margin-top:30px;
        }

        span.alert{
            color:#FF0000;
            font-weight:bold;
            font-size:160%;
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

    @foreach($rooms as $room)
        <div class="row">
            <div class="col-sm-3"></div>
            @if($room->finished == false)
            <a href="/contractor/message_room?room_id={{$room->Room_id}}" class="col-sm-6">
                <div class="room_frame_nofinish">

                    <div class="title">
                        {!! $room->work->Title !!}
                    </div>

                    <div class="room_fotter">
                        <span class="to_name">送信相手：{{$room->contractor->Nickname}}</span>
                        <span class="created_date">作成日時：{{$room->created_at}}</span>
                    </div>
                </div>
            </a>
            @else
            <a href="/contractor/message_room?room_id={{$room->Room_id}}" class="col-sm-6">
            <div class="room_frame_finish">

                <div class="title">
                    {!! $room->work->Title !!}
                </div>

                <div class="room_fotter">
                    <span class="to_name">送信相手：{{$room->contractor->Nickname}}</span>
                    <span class="created_date">作成日時：{{$room->created_at}}</span>
                </div>
                <div class="finished">
                <span class="alert">このメッセージルームは終了済みです。</span>
                </div>
            </div>
            </a>
            @endif
        </div>
    @endforeach

</body>
@endsection
</html>