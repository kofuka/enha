<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <style>
        .image{
            margin-top: 40px;
            margin-left: 50px;
        }
        .h{
           text-align: center;
           margin-top: 100px;
           font-weight: 700;
        }
        .one{
            margin-left: 100px;
        }
        .two{
            margin-left: 30px;
        }
        
    </style>
    @extends('layout.app')

@section('title-box')
gallery
@endsection
@section('content')
<h2 class="h">Gallery</h2>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="image">
            <img class="one" src="/img/chb1.jpg" height="300" width="320" alt="">
            <img class="two" src="/img/chb2.jpg" height="300" width="675" alt="">
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col">
            <div class="image">
            <img class="one" src="/img/sun1.jpg" height="450" width="320" alt="">
            <img class="two" src="/img/jung1.jpg" height="450" width="320" alt="">
            <img class="two" src="/img/ni1.jpg" height="450" width="320" alt="">
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col">
            <div class="image">
            <img class="one" src="/img/jake1.jpg" height="320" width="320" alt="">
            <img class="two" src="/img/sung1.jpg" height="320" width="320" alt="">
            <img class="two" src="/img/hee1.jpg" height="320" width="320" alt="">
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col">
            <div class="image">
            <img class="one" src="/img/tm1.jpg" height="320" width="674" alt="">
            <img class="two" src="/img/tm2.jpg" height="320" width="320" alt="">
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col">
            <div class="image">
            <img class="one" src="/img/fun1.jpg" height="320" width="320" alt="">
            <img class="two" src="/img/fun2.jpg" height="320" width="320" alt="">
            <img class="two" src="/img/fun3.jpg" height="320" width="320" alt="">
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection
</body>
</html>