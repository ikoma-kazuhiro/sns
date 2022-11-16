<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<section class="col-auto">
<div class="card">
  <div class="card-header">
    <i class="fa-regular fa-user"></i>
    $users_info->nickname
  </div>
  <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
        <p><i class="fa-regular fa-address-book"></i>
        個人情報
        </p>
        <p>年齢：$users_info->age歳</p>
        <p>誕生日：$users_info->birthday</p>
        バド歴：$users_info->game_history年
    </li>
    <li class="list-group-item">
        <p><i class="fa-solid fa-link"></i>
            SNSアカウント
        </p>
        <p>LINE：〇〇〇〇〇〇</p>
        <p>Twitter：〇〇〇〇〇〇</p>
        <p>instagram：〇〇〇〇〇〇</p>
    </li>
    <li class="list-group-item">
        <p><i class="fa-regular fa-message"></i>
            自己紹介
        </p>
        <p>
            $users_introduction
            <p>皆さんと楽しくバドミントンをしたいです！</p>
            <p>よろしくお願いします！</p>
        </p>
    </li>
    <li class="list-group-item">
        <p><i class="fa-solid fa-paperclip"></i>
            バドミントン情報
        </p>
        <p></i>
            ラケット：$users_info->racket
        </p>
        <p></i>
            シューズ：$users_info->shoes
        </p>
        <p></i>
            練習場所：$users_info->address
        </p>
    </li>
    <li class="list-group-item">
    <p><i class="fa-regular fa-file"></i>
    投稿
    </p>
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
                <!--
                foreach
                <tr>
                    <th scope="row">$post->created_at</th>
                    <td>$post->title</td>
                    <td><i class="fa-solid fa-pen-to-square"></i></td>
                    <td><i class="fa-solid fa-link"></i></td>
                    <td><i class="fa-solid fa-trash-can"></i></td>
                </tr>
                endforeach
                -->
              </tbody>
            </table>
    </li>
    <li class="list-group-item">
    <p><i class="fa-regular fa-flag"></i>
        プレイヤー募集
    </p>
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
    </li>
    <li class="list-group-item">
        <p><i class="fa-solid fa-camera"></i>
            グッズレビュー
        </p>
        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ラケット名</h5>
                            <h6 class="card-subtitle mb-2">★★★★☆</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">レビューページへ</a>
                        </div>
                    </div>
    </li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div>
</section>
    
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