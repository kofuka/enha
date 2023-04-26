<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <style>
        .images{
            margin-top: 20px;
        }
    </style>
@extends('layout.app')
@section('title-box')
Fanchat
@endsection

@section('content')
<br>
<center>
    <h1>Send messege</h1>
    </center>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $er)
                    <li>
                        {{ $er }}
                    </li>
                @endforeach
            </ul>
        </div>

    @endif

<br>
<br>
<div class="container">
    <div class="row">
    <div class="col">
<form action="{{route('contact-form')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="nam2e"></label>
        <input type="text" name="name" placeholder="name" id="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="email"></label>
        <input type="text" name="email" placeholder="email" id="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="subject"></label>
        <input type="text" name="subject" placeholder="theme" id="subject" class="form-control">
    </div>

    <div class="form-group">
        <label for="message"></label>
        <textarea name="message" id="message" class="form-control" placeholder="messege" cols="30" rows="10"></textarea>
    </div>
    <br>
    <div class=""></div>
    <button type="submit" class="btn btn-dark btn-lg">Отправить</button>
</form>
</div>

<div class="col">
    <img class="images" src="/img/hybe.jpg" height="330" width="500" alt="">
</div>

</div>
</div>
@endsection
</body>
</html>