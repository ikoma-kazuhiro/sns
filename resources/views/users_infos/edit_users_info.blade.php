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
        <h1 class="title">ユーザー情報編集画面</h1>
        <div class="content">
            <form action="/users_infos/edit_users_info/{{ $users_info->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__nickname'>
                    <h2>ニックネーム</h2>
                    <input type='text' name='users_info[nickname]' value="{{ $users_info->nickname }}">
                </div>
                <div class='content__racket'>
                    <h2>ラケット</h2>
                    <input type='text' name='users_info[racket]' value="{{ $users_info->racket }}">
                </div>
                <div class='content__shoes'>
                    <h2>シューズ</h2>
                    <input type='text' name='users_info[shoes]' value="{{ $users_info->shoes }}">
                </div>
                <div class='content__address'>
                    <h2>練習場所</h2>
                    <input type='text' name='users_info[address]' value="{{ $users_info->address }}">
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
@endsection