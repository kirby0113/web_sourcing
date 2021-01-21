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

    </style>
</head>
<body>
        <header>
    <a href="javascript:history.back()" class="back">戻る</a>
    </header>
    <div class="room_title"><span>{{$title}}</span></div>

    <form class="message_form" action="/client/message_create",method="post">
            <span class="row message-content">
                <div class="col-sm-3"></div>
                <div class="text">
                    <textarea class="request-content" cols="75" rows="3" name="content"></textarea>
                </div>
                <input type="submit" class="btn btn-primary submit"></input>
            </span>
    </form>

    @foreach($messages as $message)
    <div class="row">
    @if($message->from_user_id == $my_id)
        <div class="col-sm-3"></div>
        @else
        <div class="col-sm-6"></div>
        @endif


        <div class="message_frame col-sm-5 ">
            
            <div class="content">
                {!! $message->Message !!}
            </div>

            <div class="message_fotter">
                <a href="/client/contractor_show?id={{$message->contractor->Contractor_id}}" class="contractor_name">送信者：{{$message->contractor->Nickname}}</a>
                <span class="requested_date">提案日時：{{$message->created_at}}</span>
            </div>

        </div>
    </div>
        @endforeach
    </div>
</body>
</html>