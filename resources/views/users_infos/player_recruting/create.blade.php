@extends('layouts.app')

@section('gamen_title', 'プレイヤー募集作成画面')

@section('content')
    
    <body>
        <div class='recrutings'>
            <form action="{{route('player_recruting.store')}}" method="POST">
                @csrf
                <div class="card mb-3 ml-1 mr-1 col-8">
                  <div class="card-header">
                    プレイヤー募集情報を記入してください
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="recruting_title">
                            <p>タイトル</p>
                            <input type="text" name="recruting[recruting_title]">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="recruting_category">
                            <p>募集形式</p>
                            <div>
                                <label><input type="radio" name="recruting[recruting_category]" value=1><span>試合</span></label>
                            </div>
                            <div>
                                <label><input type="radio" name="recruting[recruting_category]" value=2><span>練習</span></label>    
                            </div>
                            <div>
                                <label><input type="radio" name="recruting[recruting_category]" value=3><span>コーチング</span></label>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="venue">
                            <p>場所</p>
                            <input type="text" name="recruting[venue]">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="from_to_datetime">
                            <p>日時</p>
                            <input type="date" name="recruting[from_datetime]">〜<input type="date" name="recruting[to_datetime]">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="sex">
                            <p>性別</p>
                            <div>
                                <label><input type="radio" name="recruting[sex]" value=1><span>男性</span></label>
                            </div>
                            <div>
                                <label><input type="radio" name="recruting[sex]" value=2><span>女性</span></label>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="minmax_age">
                            <p>年齢</p>
                            <input type="number" name="recruting[min_age]">〜<input type="number" name="recruting[max_age]">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="game_history">
                            <p>バドミントン歴</p>
                            <input type="number" name="recruting[game_history]">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="game_type_tori">
                            <p>競技種類</p>
                            <div>
                                <label><input type="radio" name="recruting[game_type_tori]" value=1><span>団体戦</span></label>
                            </div>
                            <div>
                                <label><input type="radio" name="recruting[game_type_tori]" value=2><span>個人戦</span></label>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="game_type_sdm">
                            <p>競技種目</p>
                            <div>
                                <label><input type="radio" name="recruting[game_type_sdm]" value=1><span>シングルス</span></label>
                            </div>
                            <div>
                                <label><input type="radio" name="recruting[game_type_sdm]" value=2><span>ダブルス</span></label>
                            </div>
                            <div>
                                <label><input type="radio" name="recruting[game_type_sdm]" value=3><span>ミックス</span></label>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="shuttle_bringing">
                            <p>シャトルについて</p>
                            <div>
                                <label><input type="radio" name="recruting[shuttle_bringing]" value=1><span>持参お願いします</span></label>
                            </div>
                            <div>
                                <label><input type="radio" name="recruting[shuttle_bringing]" value=2><span>こちらで用意します</span></label>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="entry_fee">
                            <p>参加費</p>
                            <input type="number" name="recruting[entry_fee]">円
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="mood">
                            <p>雰囲気</p>
                            <textarea class="mood_text" name="recruting[mood]"></textarea>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="note">
                            <p>備考</p>
                            <textarea class="note_text" name="recruting[note]"></textarea>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <input type="submit" value="保存" class="btn btn-primary">
                    </li>
                  </ul>
                  <input class="js_loading" type="hidden" name="recruting[user_id]" value="{{ Auth::user()->id }}">
                </div>
            </form>

        </div>
        <button type="button" class="btn btn-primary js_loading" onclick="location.href='/' ">トップへ戻る</button>
    </body>
    
</html>

@endsection