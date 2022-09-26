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
        <h1>Blog Name</h1>
        <h2>ホーム</h2>
        <p><a href='/sns_users/create_post'>投稿作成</a></p>
        <p><a href='/sns_users/show_posts_list'>投稿一覧</a></p>
        <h2>お仲間探し</h2>
        <h2>アカウント</h2>
        <p><a href='/sns_users/edit'>アカウント編集</a></p>
        
    </body>
    
</html>
@endsection