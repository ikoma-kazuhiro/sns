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
        <h1>バド探し</h1>
        <h2>ホーム</h2>
        <p><a href='/users_infos/create_post'>投稿作成</a></p>
        <p><a href='/users_infos/show_posts_list'>投稿一覧</a></p>
        <h2>お仲間探し</h2>
        <p><a href='/users_infos/show_users_list'>アカウント一覧</a></p>
        <h2>アカウント</h2>
        @if(empty($users_info))
            <p><a href='/users_infos/create_users_info'>アカウント作成</a></p>
        @else
            <p><a href='/users_infos/edit_users_info/{{ $users_info->id }}'>アカウント編集</a></p>
        @endif
    </body>
    
</html>
@endsection