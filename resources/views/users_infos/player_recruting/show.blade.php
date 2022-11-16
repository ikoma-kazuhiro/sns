@extends('layouts.app')

@section('gamen_title', 'プレイヤー募集一覧画面')

@section('content')
<body>
    <div class='recrutings'>
        <section class='recruting mb-5'>
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $recruting->recruting_title }}
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        @if($recruting->recruting_category == 1)
                        試合
                        @elseif($recruting->recruting_category == 2)
                        練習
                        @else
                        コーチング
                        @endif
                    </h6>
                    <p class="card-text">{{ $recruting->mood }}</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p><i class="fa-solid fa-location-dot"></i>
                                開催場所
                            </p>
                                {{ $recruting->venue }}
                        </li>
                        <li class="list-group-item">
                            <p><i class="fa-regular fa-calendar-days"></i>
                                開催日時
                            </p>
                                {{ $recruting->from_datetime }}　〜　{{ $recruting->to_datetime }}
                        </li>
                        <li class="list-group-item">
                            <p><i class="fa-solid fa-user"></i>
                                条件
                            </p>
                            <p>
                                @if($recruting->sex == 1)
                                男性
                                @else
                                女性
                                @endif
                            </p>
                            <p>{{ $recruting->min_age }}歳　〜　{{ $recruting->max_age }}歳</p>
                            <p>バトミントン歴：{{ $recruting->game_history }}年以上</p>
                        </li>
                        <li class="list-group-item">
                            <p><i class="fa-solid fa-scroll"></i>
                                @if($recruting->recruting_category == 1)
                                試合条件
                                @elseif($recruting->recruting_category == 2)
                                練習条件
                                @else
                                コーチング条件
                                @endif
                            </p>
                            <p>
                                @if($recruting->game_type_tori == 1)
                                団体戦
                                @else
                                個人戦
                                @endif
                            </p>
                            <p>
                                @if($recruting->game_type_sdm == 1)
                                シングルス
                                @elseif($recruting->game_type_sdm == 2)
                                ダブルス
                                @else
                                ミックス
                                @endif
                            </p>
                        </li>
                        <li class="list-group-item">
                            <p><i class="fa-solid fa-paperclip"></i>シャトル</p>
                            @if($recruting->shuttle_bringing == 1)
                            持参お願いします
                            @else
                            こちらで用意します
                            @endif
                        </li>
                        <li class="list-group-item">
                            <p><i class="fa-solid fa-dollar-sign"></i>参加費用</p>
                            {{ $recruting->entry_fee }}円
                        </li>
                        <li class="list-group-item mb-2">
                            {{ $recruting->note }}
                        </li>
                    </ul>
                        <a href="#" class="btn btn-primary js_loading"><i class="fa-solid fa-file-pen"></i>
                            応募する
                        </a>
                        <a href="#" class="btn btn-success js_loading"><i class="fa-solid fa-magnifying-glass"></i>
                            掲載者ページへ
                        </a>
                        <form action="{{route('player_recruting.destroy', ['player_recruting'=>$recruting->id])}}" id="form_{{ $recruting->id }}" method="post" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-danger text-white" onclick="return deletePost('form_{{ $recruting->id }}');"><i class="fa-solid fa-trash-can"></i>
                                削除
                            </a> 
                        </form>
                </div>
            </div>
        </section>
    </div>
        <button type="button" class="btn btn-primary js_loading" onclick="location.href='{{ route('player_recruting.index') }}' ">トップへ戻る</button>
        
    <script>
        function deletePost(e){
            'use strict';
            if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                document.getElementById(e).submit();
            }
        }
    </script>
</body>

@endsection