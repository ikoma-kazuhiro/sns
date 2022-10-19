<!DOCTYPE HTML>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class='post'>
            <h2 class='title'>
                <a>{{ $post->title }}</a>
            </h2>
            <p class='body'>{{ $post->body }}</p>
        </div>
    
    [<a href="/comments/{{ $post->id }}">コメント</a>]<br>
    
    [<a href="/users_infos/{{ $post->id }}/edit_post">編集</a>]<br>
    
    <form action="/users_infos/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="button" onclick="return deletePost('form_{{ $post->id }}');">削除</button> 
    </form>
    <br>
    
    [<a href='/users_infos/show_posts_list'>back</a>]
    
    <script>
        function deletePost(e){
            'use strict';
            if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                document.getElementById(e).submit();
            }
        }
    </script>
    </body>
</html>
@endsection