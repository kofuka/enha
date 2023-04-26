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
        body{
  
  font-family: 'Raleway', -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  background:white;
  text-align:center;
}

.menu{
  font-weight: bold;
  padding: 30px 0;
}
.foto{
  margin-top: -60px;
}
* {box-sizing: border-box;}
body{margin: 0;}
div {

  display: block;
  
}
.inf{
  text-decoration: none;
  float: right;
  margin-right: 200px;
  width: 560px;
  height: 209px;
  color: black;
  font-size: 15px;
  margin-top: 20px
}
.scale {
  display: inline-block; /* Строчно-блочный элемент */
  overflow: hidden; /* Скрываем всё за контуром */
}
.scale img {
  transition: 1s; /* Время эффекта */
  display: block; /* Убираем небольшой отступ снизу */
}
.scale img:hover {
  transform: scale(1.2); /* Увеличиваем масштаб */
}
.block-2{
  margin-top: 20px;
}
.line{
  margin-top: 25px;
  color: black;
  opacity: 100%;
}


.enha{
    text-align: center;
}
.aa{
    margin-top: 100px
}
    </style>
@extends('layout.app')

@section('title-box')
about
@endsection

@section('content')
<br>
<br>
<h1 class="enha">Enhypen members</h1>
<div class="container aa">
        <div class="row">
            <div class="col">
                <a href="">
                    <div class="scale"><img class="scale" src="/img/sunoo.png" width="250" height="250" alt=""></div>
                    <div class="text-md-start inf">
                        <h5>Sunoo (선우)</h5>
                        <p>Birth Name: Kim Seon Woo (김선우) <br>
                            Birthday: June 24, 2003 <br>
                            Zodiac Sign: Cancer <br>
                            Height: 177 cm (5’10″) <br>
                            Nationality: Korean
                        </p>
                        <button class="btn btn-primary bg-dark border border-secondary" type="submit">Читать дальше</button>
                    </div>
                </a>
            </div>
            <hr class="line">
            <div class="col block-2">
                <a href="">
                    <div class="scale"><img class="scale" src="/img/jungwon.png" width="250" height="250" alt=""></div>
                    <div class="text-md-start inf">
                        <h5>Jungwon (정원)</h5>
                        <p>Birth Name: Yang Jung Won (양정원) <br>
                        Birthday: February 9, 2004 <br>
                        Zodiac Sign: Aquarius <br>
                        Height: 175 cm (5’9″) <br>
                        Nationality: Korean
                        </p>
                        <button class="btn btn-primary bg-dark border border-secondary" type="submit">Читать дальше</button>
                    </div>
                </a>
            </div>
            <hr class="line">
            <div class="col block-2">
                <a href="">
                    <div class="scale"><img class="scale" src="/img/niki.png" width="250" height="250" alt=""></div>
                    <div class="text-md-start inf">
                        <h5>Ni-ki (니키)</h5>
                        <p>Birth Name: Nishimura Riki (西村 力) <br>
                        Birthday: December 9th, 2005 <br>
                        Zodiac Sign: Sagittarius <br>
                        Height: 183 cm (6’0″) <br>
                        Nationality: Japanese
                        </p>
                        <button class="btn btn-primary bg-dark border border-secondary" type="submit">Читать дальше</button>
                    </div>
                </a>
            </div>

            <hr class="line">
            <div class="col block-2">
                <a href="">
                    <div class="scale"><img class="scale" src="/img/jake.png" width="250" height="250" alt=""></div>
                    <div class="text-md-start inf">
                        <h5>Jake (제이크)</h5>
                        <p>Birth Name: Jake Sim (제이크 심) <br>
                        Birthday: November 15, 2002 <br>
                        Zodiac Sign: Scorpio <br>
                        Height: 175 cm (5’9″) <br>
                        Nationality: Korean-Australian
                        </p>
                        <button class="btn btn-primary bg-dark border border-secondary" type="submit">Читать дальше</button>
                    </div>
                </a>
            </div>

            <hr class="line">
            <div class="col block-2">
                <a href="">
                    <div class="scale"><img class="scale" src="/img/sunghoon.png" width="250" height="250" alt=""></div>
                    <div class="text-md-start inf">
                        <h5>Sunghoon (성훈)</h5>
                        <p>Birth Name: Park Sung Hoon (박성훈) <br>
                        Birthday: December 8, 2002 <br>
                        Zodiac Sign: Sagittarius <br>
                        Height: 181 cm (5’11″) <br>
                        Nationality: Korean
                        </p>
                        <button class="btn btn-primary bg-dark border border-secondary" type="submit">Читать дальше</button>
                    </div>
                </a>
            </div>

            <hr class="line">
            <div class="col block-2">
                <a href="">
                    <div class="scale"><img class="scale" src="/img/jay.png" width="250" height="250" alt=""></div>
                    <div class="text-md-start inf">
                        <h5>Jay (제이)</h5>
                        <p>Birth Name: Jay Park <br>
                        Birthday: April 20, 2002 <br>
                        Zodiac Sign: Taurus <br>
                        Height: 180 cm (5’11″) <br>
                        Nationality: Korean-American <br>
                        </p>
                        <button class="btn btn-primary bg-dark border border-secondary" type="submit">Читать дальше</button>
                    </div>
                </a>
            </div>

            <hr class="line">
            <div class="col block-2">
                <a href="">
                    <div class="scale"><img class="scale" src="/img/heesung.png" width="250" height="250" alt=""></div>
                    <div class="text-md-start inf">
                        <h5>Heeseung (희승)</h5>
                        <p>Birth Name: Lee Hee Seung (이희승) <br>
                        Birthday: October 15, 2001 <br>
                        Zodiac Sign: Libra <br>
                        Height: 183 cm (6’0”) <br>
                        Nationality: Korean
                        </p>
                        <button class="btn btn-primary bg-dark border border-secondary" type="submit">Читать дальше</button>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>


@endsection
</body>
</html>