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
        <h1 class="title">ユーザー情報</h1>
        <div class="user_info">
            <div class='content__nickname'>
                <h2>ニックネーム:{{ $users_info->nickname }}</h2>
            </div>
            <div class='content__racket'>
                <h2>ラケット:{{ $users_info->racket }}</h2>
            </div>
            <div class='content__shoes'>
                <h2>シューズ:{{ $users_info->shoes }}</h2>
            </div>
            <div class='content__address'>
                <h2>練習場所:{{ $users_info->address }}</h2>
            </div>
        </div>
        <div class="back">[<a href="/users_infos/show_users_list">back</a>]</div>
    </body>
</html>
@endsection