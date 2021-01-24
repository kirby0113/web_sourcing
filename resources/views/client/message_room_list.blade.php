<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DM一覧</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<style>
        *{
            margin:0px;
            padding:0px;
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
        a.back{
            font-size:300%;
            font-weight:bold;
            margin-left:60px;
        }
        header{
            padding-top:40px;
        }

        div.room_frame{
            padding:20px;
            margin-top:40px;
            margin-bottom:40px;
            border:solid 4px;
            border-radius:4px;
            background-color:#FFFFFF;
            border-color: #000000;
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

</style>

<body>
    <header>
        <a href="/client/toppage" class="back">戻る</a>
    </header>

    @foreach($rooms as $room)
        <div class="row">
            <div class="col-sm-3"></div>
            <a href="/client/message_room?room_id={{$room->Room_id}}" class="col-sm-6">
                <div class="room_frame">

                    <div class="title">
                        {!! $room->work->Title !!}
                    </div>

                    <div class="room_fotter">
                        <span class="to_name">送信相手：{{$room->work->contractor->Nickname}}</span>
                        <span class="created_date">作成日時：{{$room->created_at}}</span>
                    </div>
                </div>
            </a>
        </div>
    @endforeach

</body>
</html>