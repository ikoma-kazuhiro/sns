<!DOCTYPE html>
@extends('layouts.app')

@section('gamen_title', 'コメント登録画面')

@section('content')
        <div class='post'>
            <div class="row">
                <div class="card mb-3 ml-1 mr-1 col-8">
                    <div class="card-header">
                        {{ $post->user->usersInfo->nickname }}
                    </div>
                     <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at }}</h6>
                        <p class="card-text">{{ $post->body }}</p>
                    </div>
                </div>
            </div>
            
        {{--ここより下にはpostのidにリレーションされているコメントを表示したい--}}
        @if(empty($post->comments))
            まだコメントはありません
        @else
        <div class='comments'>
            
            @foreach ($post->comments as $comment)
            <div class="row">
                <div class="card mb-3 ml-5 mr-1 col-8">
                    <div class="card-header">
                        {{ $comment->commentUser->usersInfo->nickname }}
                    </div>
                     <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">{{ $comment->created_at }}</h6>
                        <p class="card-text">{!! nl2br(e($comment->comment)) !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
        
        
        {{--ここより下には、postのidとリレーションしてコメントを登録できるようにしたい--}}
        <div class="content">
            <form action="/comments/store" method="POST">
                @csrf
                <div class="row">
                    <div class="card mb-3 ml-1 mr-1 col-8">
                        <div class="card-header">
                            コメント登録
                        </div>
                         <div class="card-body">
                            <p class="card-text">
                                <textarea name='comment[comment]'></textarea>
                            </p>
                        </div>
                        <input type="hidden" name="comment[post_id]" value="{{ $post->id }}">
                        <input type="hidden" name="comment[comment_user_id]" value="{{ Auth::id() }}">
                        <input type="submit" value="保存" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
        <button type="button" class="btn btn-primary" onclick="location.href='/' ">トップへ戻る</button>
@endsection