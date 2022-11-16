<!DOCTYPE HTML>
@extends('layouts.app')

@section('content')
    <body>
        <div class='post'>
            <h2 class='title'>
                <a>{{ $post->title }}</a>
            </h2>
            <p class='body'>{{ $post->body }}</p>
        </div>
    
    <p><button type="button" class="btn btn-success js_loading" onclick="location.href='/comments/{{ $post->id }}' ">コメント</button></p>
    <p><button type="button" class="btn btn-primary js_loading" onclick="location.href='/users_infos/{{ $post->id }}/edit_post' ">編集</button></p>
    
    <form action="/users_infos/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
        @csrf
        @method('DELETE')
        <p><a class="btn btn-danger text-white" onclick="return deletePost('form_{{ $post->id }}');">削除</a></p>
    </form>
    
    <p><button type="button" class="btn btn-primary js_loading" onclick="location.href='/users_infos/show_posts_list' ">戻る</button></p>
    
    <script>
        function deletePost(e){
            'use strict';
            if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                document.getElementById(e).submit();
            }
        }
    </script>
    </body>
</html>
@endsection