<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">コメント登録画面</h1>
        <div class='post'>
            <h2 class='title'>
                <a>{{ $post->title }}</a>
            </h2>
            <p class='body'>{{ $post->body }}</p>
        </div>
        
        {{--ここより下にはpostのidにリレーションされているコメントを表示したい--}}
        @if(empty($post->comments))
            まだコメントはありません
        @else
        <div class='comments'>
            @foreach ($post->comments as $comment)
                <div class='post'>
                    <p class='comment'>{{ $comment->comment }}</p>
                </div>
            @endforeach
        </div>
        @endif
        
        
        {{--ここより下には、postのidとリレーションしてコメントを登録できるようにしたい--}}
        <div class="content">
            <form action="/comments/store" method="POST">
                @csrf
                <div class='content__comment'>
                    <h2>コメント</h2>
                    <input type='text' name='comment[comment]' value="{{ $post->comment }}">
                </div>
                <input type="hidden" name="comment[name]" value="{{ $post->user->users_info->nickname }}">
                <input type="hidden" name="comment[post_id]" value="{{ $post->id }}">
                <input type="hidden" name="comment[comment_user_id]" value="{{ $post->user_id }}">
                <input type="submit" value="保存">
            </form>
        </div>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
@endsection