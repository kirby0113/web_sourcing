<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>リクエスト</title>
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
        a.toppage{
            font-size: 200%;
            margin:20px;
        }
        div.request-content{
            margin-top:30px;
            
        }
        div.submit{
            margin-top:30px;
        }
        div.explain{
            margin-top:40px;
            margin-left:200px;
            font-size:130%;
            color: #FF0000;
            background-color: #FFFFFF;
            border:solid 4px #000000;
            display: inline-block;
        }
        textarea.request-content{
            font-size: 300%;
        }

</style>
<body>
<a class="toppage" href="javascript:history.back()">戻る</a>
<form>
        <div class="explain">こちらのフォームに提案等をお書きください。依頼者に送信します。</div>
        <div class="row request-content">
            <div class="col-sm-3"></div>
            <textarea name="request-content" cols="100" rows="20"></textarea>
        </div>
        <div class="row submit">
            <div class="col-sm-5"></div>
            <a class="submit-button"><button class="btn btn-primary"><font size="7">送信</font></button></a>
        </div>
</form>
</body>
</html>