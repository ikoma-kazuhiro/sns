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
        <h1>ユーザ一覧</h1>
        <div class='users_info'>
            @foreach ($users_infos as $users_info)
            {{--$posts as $key => $post --}}
                <div class=''>
                    <a href="/users_infos/show_detail_user/{{ $users_info->id }}">
                        {{ $users_info->nickname }}
                    </a>
                </div>
            @endforeach
        </div>
        [<a href="/">back</a>]
    </body>
</html>
@endsection