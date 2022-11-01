<!DOCTYPE html>
@extends('layouts.app')

@section('gamen_title', 'ユーザー情報編集画面')

@section('content')
        <div class="content">
            <form action="/users_infos/edit_users_info/{{ $users_info->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class='content__nickname'>
                    <h2>ニックネーム:{{ $users_info->nickname }}</h2>
                    <input type='text' name='users_info[nickname]' value="{{ $users_info->nickname }}">
                </div>
                <div class='content__racket'>
                    <h2>ラケット:{{ $users_info->racket }}</h2>
                    <input type='text' name='users_info[racket]' value="{{ $users_info->racket }}">
                </div>
                <div class='content__shoes'>
                    <h2>シューズ:{{ $users_info->shoes }}</h2>
                    <input type='text' name='users_info[shoes]' value="{{ $users_info->shoes }}">
                </div>
                <div class='content__address'>
                    <h2>練習場所:{{ $users_info->address }}</h2>
                    <input type='text' name='users_info[address]' value="{{ $users_info->address }}">
                </div>
                <div class='content__birthday'>
                    <h2>誕生日:{{ $users_info->birthday }}</h2>
                    <input type='dateTime' name='users_info[birthday]' value="{{ $users_info->birthday }}">
                </div>
                <div class='content__age'>
                    <h2>年齢:{{ $users_info->age }}</h2>
                    <input type='int' name='users_info[age]' value="{{ $users_info->age }}">
                </div>
                <div class='content__game_history'>
                    <h2>バドミントン歴:{{ $users_info->game_history }}</h2>
                    <input type='int' name='users_info[game_history]' value="{{ $users_info->game_history }}">
                </div>
                <div class='content__introduction'>
                    <h2>自己紹介:{{ $users_info->introduction }}</h2>
                    <input type='text' name='users_info[introduction]' value="{{ $users_info->introduction }}">
                </div>
                <div class='content__icon'>
                    <h2>アイコン</h2>
                    <img src='{{ asset($users_info->icon) }}'>
                    <input type='file' name='users_info[icon]'>
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
        <div class="back">[<a href="/">back</a>]</div>
@endsection