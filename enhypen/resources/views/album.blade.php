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
        .pop{
            margin-left: 118px;
        }
        .all{
            margin-top: 30px;
        }
        .h{
            margin-top: 15px;
            font-weight: 700;
        }
        .popm{
            margin-left: 118px;
            margin-top:50px;
        }
        .foto{
            margin-left: 40px;
            margin-top: -95px;
        }
        .null{
            font-weight: 700;
            font-size: 22px;
            margin-top: 45px;
        }
        .audio{
            margin-left: 30px;
            margin-top: 20px;
        }
        .text{
            margin-top: -70px;
            margin-left: 110px;
            font-weight: 700;
        }
    </style>
@extends('layout.app')

@section('title-box')
albums
@endsection
@section('content')
<img src="/img/enha.jpg" height="700" width="1400" alt="">
<br>
<br>
<br>
<br>
<h3 class="pop">Popular albums</h3>
<hr>
<div class="container">
    <div class="row">
        <div class="col">
            <img class="all" src="/img/a1.jpg" height="250" width="250" alt="">
            <h6 class="h">BORDER : CARNIVAL</h6>
            <p>33 678 слушателей</p>
        </div>

        <div class="col">
            <img class="all" src="/img/a2.jpg" height="250" width="250" alt="">
            <h6 class="h">MANIFESTO : DAY 1</h6>
            <p>19 926 слушателей</p>
        </div>

        <div class="col">
            <img class="all" src="/img/a3.jpg" height="250" width="250" alt="">
            <h6 class="h">DIMENSION : ANSWER</h6>
            <p>21 981 слушатель</p>
        </div>

        <div class="col">
            <img class="all" src="/img/a4.jpg" height="250" width="250" alt="">
            <h6 class="h">DIMENSION : DILEMMA</h6>
            <p>19 359 слушателей</p>
        </div>
    </div>
</div>
<br>

<hr>
<h3 class="popm">Popular music</h3>
<div class="container">
    <div class="row align-items-start">
        <div class="col">
            <p class="null">01</p>
            <div>
            <img class="foto" src="/img/a1.jpg" height="50" width="50" alt="">
            <p class="text">enhypen - FEVER</p>
            <audio controls class="audio">
                <source class="audio" src="/audio/fever.mp3">
            </audio>
            </div>
            

            <p class="null">02</p>
            <div>
            <img class="foto" src="/img/a2.jpg" height="50" width="50" alt="">
            <p class="text">Future perfect (Pass the MIC)</p>
            <audio controls class="audio">
                <source class="audio" src="/audio/future.mp3">
            </audio>
            </div>
            
            <p class="null">03</p>
            <div>
            <img class="foto" src="/img/a4.jpg" height="50" width="50" alt="">
            <p class="text">Tamed-Dashed</p>
            <audio controls class="audio">
                <source class="audio" src="/audio/tamed.mp3">
            </audio>
            </div>
            </div>

            <div class="col">
            <p class="null">04</p>
            <div>
            <img class="foto" src="/img/a3.jpg" height="50" width="50" alt="">
            <p class="text">Blesses-Cursed</p>
            <audio controls class="audio">
                <source class="audio" src="/audio/blessed.mp3">
            </audio>
            </div>
            

            <p class="null">05</p>
            <div>
            <img class="foto" src="/img/a4.jpg" height="50" width="50" alt="">
            <p class="text">Go Big or Go Home</p>
            <audio controls class="audio">
                <source class="audio" src="/audio/gobi.mp3">
            </audio>
            </div>
            
            <p class="null">06</p>
            <div>
            <img class="foto" src="/img/a2.jpg" height="50" width="50" alt="">
            <p class="text">ParadoXXX Invasiond</p>
            <audio controls class="audio">
                <source class="audio" src="/audio/paradox.mp3">
            </audio>
            </div>
        </div>
    </div>
</div>

@endsection
</body>
</html>