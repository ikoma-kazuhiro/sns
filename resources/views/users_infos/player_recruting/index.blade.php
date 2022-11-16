@extends('layouts.app')

@section('content')
    
    <body>
        <!-- Button trigger modal
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
          Launch demo modal
        </button>
        -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class='recrutings'>
            @foreach ($recrutings as $recruting)
            {{--$posts as $key => $post --}}
                <section class='recruting mb-5'>
                    <div class="card" style="width: 30rem;">
                      <div class="card-body">
                        <h5 class="card-title">
                            <a href="player_recruting/show/{{$recruting->id}}">{{ $recruting->recruting_title }}</a>
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
                        </ul>
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal_{{ $recruting->id }}"><i class="fa-solid fa-magnifying-glass"></i>詳細へ</a>
                      </div>
                    </div>
        <div class="modal fade" id="modal_{{ $recruting->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
                    <div class="card" style="width: 30rem;">
                      <div class="card-body">
                        <h5 class="card-title">
                            <a href="player_recruting/show/{{$recruting->id}}">{{ $recruting->recruting_title }}</a>
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
                            <!--
                            <li class="list-group-item">
                                {{ $recruting->min_age }}　〜　{{ $recruting->max_age }}
                            </li>
                            <li class="list-group-item">
                                {{ $recruting->game_history }}
                            </li>
                            -->
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
                                個人園
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
                            <!--
                            <li class="list-group-item">
                                @if($recruting->game_type_sdm == 1)
                                シングルス
                                @elseif($recruting->game_type_sdm == 2)
                                ダブルス
                                @else
                                ミックス
                                @endif
                            </li>
                            -->
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
                        <a href="#" class="btn btn-primary"><i class="fa-solid fa-file-pen"></i>応募する</a>
                        <a href="{{route('player_recruting.show', ['player_recruting'=>$recruting->id])}}" class="btn btn-success"><i class="fa-solid fa-magnifying-glass"></i>詳細ページへ</a>
                      </div>
                    </div>
                    
                    <!--
                    <h2 class='recruting_title'>
                        <a href="player_recruting/show/{{$recruting->id}}">{{ $recruting->recruting_title }}</a>
                    </h2>
                    <h2 class='recruting_category'>
                        @if($recruting->recruting_category == 1)
                        試合
                        @elseif($recruting->recruting_category == 2)
                        練習
                        @else
                        コーチング
                        @endif
                    </h2>
                    <h2 class='venue'>
                        {{ $recruting->venue }}
                    </h2>
                    <h2 class='to_from_datetime'>
                        {{ $recruting->from_datetime }}　〜　{{ $recruting->to_datetime }}
                    </h2>
                    <h2 class='sex'>
                        @if($recruting->sex == 1)
                        男性
                        @else
                        女性
                        @endif
                    </h2>
                    <h2 class='min_max_age'>
                        {{ $recruting->min_age }}　〜　{{ $recruting->max_age }}
                    </h2>
                    <h2 class='game_history'>
                        {{ $recruting->game_history }}
                    </h2>
                    <h2 class='game_type_tori'>
                        @if($recruting->game_type_tori == 1)
                        団体戦
                        @else
                        個人園
                        @endif
                    </h2>
                    <h2 class='game_type_sdm'>
                        @if($recruting->game_type_sdm == 1)
                        シングルス
                        @elseif($recruting->game_type_sdm == 2)
                        ダブルス
                        @else
                        ミックス
                        @endif
                    </h2>
                    <h2 class='shuttle_bringing'>
                        @if($recruting->shuttle_bringing == 1)
                        持参お願いします
                        @else
                        こちらで用意します
                        @endif
                    </h2>
                    <h2 class='entry_fee'>
                        {{ $recruting->entry_fee }}円
                    </h2>
                    <h2 class='mood'>
                        {{ $recruting->mood }}
                    </h2>
                    <h2 class='note'>
                        {{ $recruting->note }}
                    </h2>
                    -->
        </div>
        </div>
        </div>
                </section>
            
            @endforeach
        </div>
        <button type="button" class="btn btn-primary js_loading" onclick="location.href='/' ">トップへ戻る</button>
    </body>
    
</html>




@endsection