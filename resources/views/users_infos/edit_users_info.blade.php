<!DOCTYPE html>
@extends('layouts.app')

@section('gamen_title', 'ユーザー情報編集画面')

@section('content')
        <div class="content">
            <form action="/users_infos/edit_users_info/{{ $users_info->id }}" method="POST">
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
                <input type="submit" value="保存">
            </form>
        </div>
        <div class="back">[<a href="/">back</a>]</div>
@endsection