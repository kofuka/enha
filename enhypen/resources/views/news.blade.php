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
        .hr{
            margin-top: 25px;
            color: black;
            opacity: 100%;
        }
        .vl {
    border-left: 2px solid black;
    height: 660px;
    margin-top: -660px;
    margin-left: 320px;
}
.a{
    margin-top: 20px
}
.ita{
    font-style: italic;
    font-weight: 700;
}
.vl1 {
    border-left: 2px solid black;
    height: 660px;
    margin-top: -660px;
    margin-left: 315px;
}
.vl2 {
    border-left: 2px solid black;
    height: 660px;
    margin-top: -652px;
    margin-left: 325px;
}
.but{
    margin-top: 15px;
    margin-right: 25px;
}
    </style>
    @extends('layout.app')

@section('title-box')
news
@endsection
@section('content')
<img src="/img/news.jpg" height="500" width="1349" alt="">
<hr class="hr">

<div class="container-fluid">
    <div class="row">
    <div class="col">
        <h4 class="a ita">ENHYPEN Is Currently <br>
            Preparing For A Comeback In May</h4>
            
       <center><img src="/img/ark.png" height="200" width="200" alt=""> </center>
       <p class="text-warning bg-dark but">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        <p>K-Pop idol group ENHYPEN confirmed they would make a comeback in May and are 
            currently busy preparing for the new album. This will be their first comeback 
            in about ten months since their third mini album, MANIFESTO: DAY 1, was released in July last year.</p>
            <p>Since their debut album, they have received huge support from fans through the unique concepts that they visually implement through their albums

</p>
        <div class="vl1"></div>
    </div>

    <div class="col">
        <h4 class="a">“Half-Vampire,Half-Wolf Manga Character Visuals” —
             ENHYPEN’s Sunghoon Gains Attention For His Recent Handsome Looks</h4>
            <p>ENHYPEN‘s Sunghoon has always been the visual of the group. During his debut era, fans fell in love with his pure, princely visuals. His nicknames included baek-gu (white puppy) and ice skating prince!</p>
 <p class="text-warning bg-dark but">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
      <center>  <img src="/img/dark.jpg" height="310" width="240" alt=""> </center>
        <div class="vl2"></div>
    </div>
    
    <div class="col">
        <br>
   <center> <img src="/img/prada.jpg" height="300" width="250" alt=""></center>
        <h4 class="a">ENHYPEN’s Prada Adventure Started Before Attending the Fall/Winter 2023/2024 Men’s Show</h4>
        <p>When ENHYPEN arrived at the Fondazione Prada on Sunday, January 15, all eyes were on them. The K-pop septet made their way from South Korea to Italy to attend Prada's Fall 2023 menswear show during Milan Fashion Week, and their presence unnoticed.</p>
        <p class="text-warning bg-dark but">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        <div class="vl"></div>
    </div>
    
    <div class="col">
        <h4 class="a">ENHYPEN are now under US label Geffen Records</h4>
        <p class="text-warning bg-dark but">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        <p>ENHYPEN is now under the US label, Geffen Records alongside other HYBE artists including BTS, Seventeen, Newjeans, and Le sserafim.</p>
        <p>Playing arenas for its first world tour and earning its first top 10 entry on the #Billboard200, 
@ENHYPEN
 </p>
       <center> <img src="/img/bt.jpg" height="320" width="250" alt=""> </center>
        
    </div>
    </div>
</div>
<hr class="hr">
@endsection
</body>
</html>