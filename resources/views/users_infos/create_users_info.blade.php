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
        <h1 class="title">ユーザー情報作成画面</h1>
        <div class="content">
            <form action="/users_infos/create_users_info" method="POST" enctype="multipart/form-data">
                @csrf
                <div class='content__nickname'>
                    <h2>ニックネーム</h2>
                    <input type='text' name='users_info[nickname]'>
                </div>
                <div class='content__racket'>
                    <h2>ラケット</h2>
                    <input type='text' name='users_info[racket]'>
                </div>
                <div class='content__shoes'>
                    <h2>シューズ</h2>
                    <input type='text' name='users_info[shoes]'>
                </div>
                <div class='content__address'>
                    <h2>練習場所</h2>
                    <input type='text' name='users_info[address]'>
                </div>
                <div class='content__birthday'>
                    <h2>誕生日</h2>
                    <input type='dateTime' name='users_info[birthday]'>
                </div>
                <div class='content__age'>
                    <h2>年齢</h2>
                    <input type='int' name='users_info[age]'>
                </div>
                <div class='content__game_history'>
                    <h2>バドミントン歴</h2>
                    <input type='int' name='users_info[game_history]'>
                </div>
                <div class='content__introduction'>
                    <h2>自己紹介</h2>
                    <input type='text' name='users_info[introduction]'>
                </div>
                <div class='content__icon'>
                    <h2>アイコン</h2>
                    <input type='file' name='users_info[icon]'>
                </div>
                {{--ここがうまくいかない--}}
                <input type="hidden" name="users_info[user_id]" value="{{ $user->id }}">
                <input type="submit" value="保存">
            </form>
        </div>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
@endsection