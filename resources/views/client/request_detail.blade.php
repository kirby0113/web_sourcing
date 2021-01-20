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
</style>
<body>
    <a href="javascript:history.back()" class="back">戻る</a>
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
            <div class="button"><a href=""><button class="btn btn-primary"><font size="6">提案を承認する</font></button></a></div>

        </div>
    </div>
        @endforeach
    </div>
</body>
</html>