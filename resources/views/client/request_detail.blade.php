@extends('layouts.header')

@section('head')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>提案詳細</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<style>
        *{
            margin: 0px;
            padding: 0px;
        }

        div.request_frame{
            display:inline-block;
            border:solid 4px #000000;
            border-radius: 3px;
            background-color: #FFFFFF;
            margin-top:40px;
            margin-bottom:40px;
        }

        a.contractor_name{
            margin-left:50px;
        }
        span.requested_date{
            margin-left:50px;
        }

        div.content{
            margin-top:20px;
            margin-bottom:20px;
            padding-top:20px;
            padding-bottom:20px;
            border-top:dotted 3px #000000;
            border-bottom:dotted 3px #000000;
            font-size:150%;

        }

        div.request_fotter{
            padding-bottom:20px;
            border-bottom:dotted 3px #000000;
            display:block;
            text-align:right;

        }

        div.button{
            text-align:center;
            margin-top:40px;
            margin-bottom:40px;

        }
        a.back{
            font-size:150%;
            font-weight:bold;
        }
        a.contractor_name{
            font-weight:bold;
            font-size:120%;
        }

        div.notfound_frame{
            padding-top:30px;
            padding-bottom:30px;
            text-align:center;
            border:solid 4px #FFFFFF;
            border-radius:5px;
            background: linear-gradient(-135deg,#ee82ee,#d8bfd8);
            box-shadow:2px 2px 7px #000;
            width:600px;
            margin-top:200px;
            margin-left:650px;
        }

        span.notfound_text{
            font-weight:bold;
            font-size:200%;
        }
</style>

</head>
@endsection
    @section('mypage')
    <a class="nav-link" href="/client/mypage"><span class="headanc">マイページ</span></a>
    @endsection

    @section('logout')
    <a class="nav-link" href="/client/logout"><span class="headanc">ログアウト</span></a>
    @endsection

    @section('DM')
    <a class="nav-link" href="/client/message_room_list"><span class="headanc">D M</span></a>
    @endsection


@section('main')
<body>
        @isset($work_requests)
    @foreach($work_requests as $request)
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="request_frame col-sm-6 ">
            
            <div class="content">
                {!! $request->contents !!}
            </div>

            <div class="request_fotter">
                <a href="/client/contractor_show?id={{$request->contractor->Contractor_id}}" class="contractor_name">提案者：{{$request->contractor->Nickname}}</a>
                <span class="requested_date">提案日時：{{$request->created_at}}</span>
            </div>
            <div class="button"><a href="/client/message_room_create?work_id={{$work_id}}&contractor_id={{$request->contractor->Contractor_id}}&request_id={{$request->Request_id}}"><button class="btn btn-primary"><font size="6">提案を承認する</font></button></a></div>

        </div>
    </div>
        @endforeach

        @else
            <div class="notfound_frame">
                <span class="notfound_text">現在未承認の提案はありません。</span>
            </div>
        @endisset
    </div>
</body>
@endsection
</html>