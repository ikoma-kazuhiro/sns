<!DOCTYPE html>
@extends('layouts.app')

@section('content')

    <div class="container font_kosugi" style="background-color: #CCFFCC">
        <div class="row" style="background-color: #CCFFFF">
            <section class="col-4">
                <!--ニックネーム-->
                ニックネーム
            </section>
            
            <section class="col-8">
                <!--年齢、誕生日、バド歴-->
                年齢：23歳　誕生日：9月14日　バド歴：11年
            </section>
        </div>
    
        <div class="row mt-5">
            <section class="col-4">
                <!--画像-->
                <img src="img/sample1.jpg" class="d-block w-100" alt="...">
            </section>
            
            <section class="col-8">
                <!--自己紹介-->
                <p>LINE：〇〇〇〇〇〇</p>
                <p>Twitter：〇〇〇〇〇〇</p>
                <p>instagram：〇〇〇〇〇〇</p>
            </section>
        </div>
        
        <div class="row　mt-5" style="background-color: #CCFFFF">
            <section style="padding:10px;">
                <!--自己紹介-->
                <p>皆さんと楽しくバドミントンをしたいです！</p>
                <p>よろしくお願いします！</p>
            </section>
        </div>
        
        <div class="row mt-5">
            <!--バド情報-->
            <table class="table table-borderless">
              <tbody>
                <tr>
                    <th scope="row">ラケットのアイコン</th>
                    <td>アストロクス100ZZ</td>
                </tr>
                <tr>
                    <th scope="row">シューズのアイコン</th>
                    <td>65z3</td>
                </tr>
                <tr>
                    <th scope="row">場所のアイコン</th>
                    <td>浜松市</td>
                </tr>
              </tbody>
            </table>
        </div>
    
        <div class="row mt-5" style="background-color: #CCFFFF">
            <h2>投稿</h2>
            <table class="table table-hover">
              <thead>
                <tr>
                    <th scope="col">投稿時間</th>
                    <th scope="col">タイトル</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <th scope="row">2022/10/24</th>
                    <td>こんにちは</td>
                    <td><i class="fa-solid fa-pen-to-square"></i></td>
                    <td><i class="fa-solid fa-link"></i></td>
                    <td><i class="fa-solid fa-trash-can"></i></td>
                </tr>
                <tr>
                    <th scope="row">2022/10/24</th>
                    <td>こんなことがありました</td>
                    <td><i class="fa-solid fa-pen-to-square"></i></td>
                    <td><i class="fa-solid fa-link"></i></td>
                    <td><i class="fa-solid fa-trash-can"></i></td>
                </tr>
                <tr>
                  <th scope="row">2022/10/24</th>
                    <td>こんばんは</td>
                    <td><i class="fa-solid fa-pen-to-square"></i></td>
                    <td><i class="fa-solid fa-link"></i></td>
                    <td><i class="fa-solid fa-trash-can"></i></td>
                </tr>
              </tbody>
            </table>
        </div>
        
        <section class="mt-5">
            <h2>プレイヤー募集</h2>
            <div class="row">
                <div class="col-4 mb-1">
                    <div class="card">
                        <div class="card-body card-body-user">
                            <h5 class="card-title">浜松市スポーツ祭個人戦募集！</h5>
                            <p class="card-text">個人戦ダブルスに一緒に参加してくれる方募集中です！楽しく試合に出たいです</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">条件１</li>
                            <li class="list-group-item">条件２</li>
                            <li class="list-group-item">条件３</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">登録</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body card-body-user">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">登録</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body card-body-user">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">登録</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body card-body-user">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">登録</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body card-body-user">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">登録</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="mt-5">
            <h2>レビュー</h2>
            <div class="row" style="background-color: #CCFFFF">
                <div class="col-4 mb-1">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ラケット名</h5>
                            <h6 class="card-subtitle mb-2">★★★★☆</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">レビューページへ</a>
                        </div>
                    </div>
                </div>
            </div>    
        </section>
    </div>
    
@endsection