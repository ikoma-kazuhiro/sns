<!DOCTYPE html>
@extends('layouts.app')

@section('content')
    <body>
        <h1 class="title">ユーザー情報作成画面</h1>
        <div class="content">
            <form action="/users_infos/create_users_info" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card mb-3">
                  <div class="card-header">
                    ユーザー情報編集画面
                  </div>
                  <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class='content__nickname'>
                                <p>ニックネーム</p>
                                <input type='text' name='users_info[nickname]'>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class='content__racket'>
                                <p>ラケット</p>
                                <input type='text' name='users_info[racket]'>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class='content__shoes'>
                                <p>シューズ</p>
                                <input type='text' name='users_info[shoes]'>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class='content__address'>
                                <p>練習場所</p>
                                <input type='text' name='users_info[address]'>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class='content__birthday'>
                                <p>誕生日</p>
                                <input type='dateTime' name='users_info[birthday]'>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class='content__age'>
                                <p>年齢</p>
                                <input type='int' name='users_info[age]'>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class='content__game_history'>
                                <p>バドミントン歴</p>
                                <input type='int' name='users_info[game_history]'>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class='content__introduction'>
                                <p>自己紹介</p>
                                <input type='text' name='users_info[introduction]'>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class='content__icon'>
                                <p>アイコン</p>
                                <label class="file_btn">
                                    <input type='file' name='users_info[icon]'>
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <input type="submit" value="保存" class="btn btn-primary js_loading">
                        </li>
                        <input type="hidden" name="users_info[user_id]" value="{{ $user->id }}">
                  </div>
                </div>
            </form>
            <button type="button" class="btn btn-primary js_loading" onclick="location.href='/' ">トップへ戻る</button>
        </div>
@endsection