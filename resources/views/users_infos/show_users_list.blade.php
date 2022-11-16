<!DOCTYPE HTML>
@extends('layouts.app')

@section('gamen_title', 'ユーザ一覧')

@section('content')
        <div class='users_info'>
            @foreach ($users_infos as $users_info)
            {{--$posts as $key => $post --}}
            <div class="card mb-3 ml-1 mr-1 col-8">
              <div class="card-header">
                <a href="/users_infos/show_users_info/{{ $users_info->id }}">
                    {{ $users_info->nickname }}
                </a>
              </div>
              <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <p><i class="fa-regular fa-address-book"></i>
                    個人情報
                    </p>
                    <p>年齢：{{$users_info->age}}歳</p>
                    <p>誕生日：{{$users_info->birthday}}</p>
                    バド歴：{{$users_info->game_history}}年
                </li>
                <li class="list-group-item">
                    <p><i class="fa-regular fa-message"></i>
                        自己紹介
                    </p>
                    <p>
                        {{$users_info->introduction}}
                    </p>
                </li>
              </ul>
            </div>
            @endforeach
        </div>
        <button type="button" class="btn btn-primary" onclick="location.href='/' ">トップへ戻る</button>
@endsection