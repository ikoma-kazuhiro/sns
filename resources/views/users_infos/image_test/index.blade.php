@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="./css/slider.css">
    </head>
    
    <body>
        <form action="/image_test/store" method="post" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <div class="image">
                <h2>画像</h2>
                <input type="file" name="img" placeholder="タイトル"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
        
        <img src="{{asset('storage/profile/EaaL1M5uDELwUPgTyAM7wlA8VgomhVnB0JHphL7r.jpg')}}">
    </body>
    
</html>
@endsection