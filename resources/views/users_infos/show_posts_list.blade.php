<!DOCTYPE HTML>
@extends('layouts.app')

@section('content')
    <body>
        <div class='posts'>
            <div class="row">
            @foreach ($posts as $post)
            {{--$posts as $key => $post --}}
                    <div class="card mb-3 ml-1 mr-1 col-8">
                        <div class="card-header">
                            {{ $post->user->usersInfo->nickname }}
                        </div>
                      <div class="card-body">
                        <h5 class="card-title"><a href="{{route('show_detail_post', ['post'=>$post->id])}}">{{ $post->title }}</a></h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at }}</h6>
                        <p class="card-text">{{ $post->body }}</p>
                        <a href="/comments/{{$post->id}}" class="btn btn-success">コメント</a>
                        <a href="/users_infos/show_users_info/{{$post->user->id}}" class="btn btn-primary">ユーザーへ</a>
                      </div>
                    </div>
                
            @endforeach
            </div>
        </div>
        <button type="button" class="btn btn-primary" onclick="location.href='/' ">トップへ戻る</button>
    </body>
</html>
@endsection