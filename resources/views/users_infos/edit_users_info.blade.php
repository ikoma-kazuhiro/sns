<!DOCTYPE html>
@extends('layouts.app')

@section('gamen_title', 'ユーザー情報編集画面')

@section('content')
        <div class="content">
            <form action="/users_infos/edit_users_info/{{ $users_info->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card mb-3">
                  <div class="card-header">
                    ユーザー情報編集画面
                  </div>
                  <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class='content__nickname'>
                                <p>ニックネーム:{{ $users_info->nickname }}</p>
                                <input type='text' name='users_info[nickname]' value="{{ $users_info->nickname }}">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class='content__racket'>
                                <p>ラケット:{{ $users_info->racket }}</p>
                                <input type='text' name='users_info[racket]' value="{{ $users_info->racket }}">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class='content__shoes'>
                                <p>シューズ:{{ $users_info->shoes }}</p>
                                <input type='text' name='users_info[shoes]' value="{{ $users_info->shoes }}">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class='content__address'>
                                <p>練習場所:{{ $users_info->address }}</p>
                                <input type='text' name='users_info[address]' value="{{ $users_info->address }}">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class='content__birthday'>
                                <p>誕生日:{{ $users_info->birthday }}</p>
                                <input type='dateTime' name='users_info[birthday]' value="{{ $users_info->birthday }}">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class='content__age'>
                                <p>年齢:{{ $users_info->age }}</p>
                                <input type='int' name='users_info[age]' value="{{ $users_info->age }}">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class='content__game_history'>
                                <p>バドミントン歴:{{ $users_info->game_history }}</p>
                                <input type='int' name='users_info[game_history]' value="{{ $users_info->game_history }}">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class='content__introduction'>
                                <p>自己紹介:{{ $users_info->introduction }}</p>
                                <input type='text' name='users_info[introduction]' value="{{ $users_info->introduction }}">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class='content__icon'>
                                <p>アイコン</p>
                                <p><img src='{{ asset($users_info->icon) }}'></p>
                                <label class="file_btn">
                                    <input type='file' name='users_info[icon]'>
                                </label>
                            </div>
                        </li>
                    <input type="submit" value="保存" class="btn btn-primary">
                  </div>
                </div>
            </form>
            <button type="button" class="btn btn-primary" onclick="location.href='/' ">トップへ戻る</button>
        </div>

@endsection