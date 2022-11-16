<!DOCTYPE HTML>
@extends('layouts.app')

@section('gamen_title', '投稿作成')

@section('content')
        <form action="/users_infos/create_post" method="POST">
            @csrf
            <div class="card mb-3 ml-1 mr-1 col-8">
              <div class="card-header">
                タイトルと投稿内容を記入してください
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="title">
                        <p>タイトル</p>
                        <input type="text" name="post[title]"/>
                        <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="body">
                        <p>投稿内容</p>
                        <textarea name="post[body]"></textarea>
                        <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                    </div>
                </li>
                <li class="list-group-item">
                    <input type="submit" value="保存" class="btn btn-primary js_loading">
                </li>
              </ul>
            </div>
            <input type="hidden" name="post[user_id]" value="{{ Auth::user()->id }}">
        </form>
        
        <button type="button" class="btn btn-primary js_loading" onclick="location.href='/' ">トップへ戻る</button>
@endsection