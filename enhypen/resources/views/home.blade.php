<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <style>
        .image{
            float: right;
            margin-right: 1px;
           
        }
        .tetx{
            margin-left: 200px;
            margin-top: 90px
        }
        .text{
            margin-left: 400px;
            margin-top: 40px
        }
        .krug{
            float: left;
            position: absolute;
            margin-top: 94px
        }
        .krug2{
            float: left;
            margin-top: 119px;
            position: absolute;
        }
        .mic{
            float: left;
            position: relative;
            margin-top: 120px
        }
        .hr{
            color: rgba(0, 0, 0, 1);
            margin-top:290px;
            margin-left: 600px;
            border-width: 3px;
            opacity: 100%;
        }
        .line{
            margin-left: 850px;
            margin-top: 50px;
        }
        .imag{
            float:right;
            margin-top: 300px;
        }
        .hr2{
            border-width: 3px;
            margin-right: 750px;
            margin-top: 300px;
            opacity: 100%;
        }
        .hz{
            margin-left: 150px;
            margin-top: 80px
        }
        .imgend{
            opacity: 70%;
            margin-top: 150px;

        }
        .stick{
            margin-left: 550px;
            margin-top: 100px;
        }
    </style>
    

@extends('layout.app')

@section('title-box')
home
@endsection
@section('content')
<img class="image" src="/img/1.jpg" height="500" width="500" alt="">
<div class="tetx">
<h2>Pass the MIC</h2>
<p>그냥 꺼져 자격을 논해?<br>
나는 없어 (woo), 네 가두리 속엔 nah <br>
바보짓은 관두겠어 이제서야 알게 됐어<br>
Give me that mic, 이건 day one</p>
</div>
<p class="text">나의 발로 서길 원해 아닌 건 의미 없어<br>
진짜 내 목소리를 꺼내 우리의 미래를 그려내<br>
함께 외쳐 (먼 훗날 먼 훗날이 완료될 그 순간) <br>
함께 외쳐 (너와 나 너와 나는 우리가 된 거야)</p>


<img class="krug" src="/img/krug.png" height="700" width="454" alt="">
<!-- <img class="krug2" src="/img/krug2.png" height="652" width="432" alt=""> -->
<img class="mic" src="/img/mic.png" height="650" width="430" alt="">
<hr class="hr">
<div class="line">
    <h2>Walk the line</h2>
    <p>선, 하얀 도화지를 가르듯<br>
세계를 가로질러 끝없이 이어지는 경계선<br>
線は僕にとって悪夢だった</p>
<br>
<p>I kept running and running <br>
Towards an unknown destination <br>
Beyond the border to cross the line</p>
</div>

<img class="imag" src="/img/2.jpg" height="430" width="550" alt="">

<hr class="hr2">
<p class="hz">어느새 그 선은<br>
나를 쫓아와 묶어버리고 주저앉힌 후<br>
그저 쳇바퀴 맴돌듯 선 위를 따라 걷게 만들었다</p>
<img class="stick" src="/img/stick.png"height="130" width="250" alt="">
<br>
<br>

<img class="imgend" src="/img/3.png" alt="" height="600" width="1350">
@endsection


</body>
</html>