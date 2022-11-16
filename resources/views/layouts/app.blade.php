<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!--box-shadow-->
    <link rel="stylesheet" href="{{ asset('css/box_shadow.css') }}">
    
    <!--Font Awesome-->
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <!--フォント-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="./css/slider.css">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm font_kosugi">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container font_kosugi">
            <div class="row">
            @guest
            @else
            <div class="col-auto text-white" style="background-color: #339966" style="margin-bottom: 24px; min-height: calc(100vh - 24px);">
                <div class="sidebar_content">
                    <h2><i class="fa-solid fa-house"></i>ホーム</h2>
                    <p><i class="fa-solid fa-file"></i><a class="js_loading" href='/users_infos/create_post'>投稿作成</a></p>
                    <p><i class="fa-solid fa-folder-open"></i><a class="js_loading" href='/users_infos/show_posts_list'>投稿一覧</a></p>
                    <h2><i class="fa-solid fa-users"></i>お仲間探し</h2>
                    <p><a class="js_loading" href='/users_infos/show_users_list'>アカウント一覧</a></p>
                    <h2><i class="fa-solid fa-flag"></i>プレイヤー募集</h2>
                    <p><i class="fa-solid fa-comment"></i><a class="js_loading" href="{{ route('player_recruting.index') }}">募集掲示板一覧</a></p>
                    <p><i class="fa-solid fa-comment"></i><a class="js_loading" href="{{ route('player_recruting.create') }}">募集掲示板登録</a></p>
                    <h2><i class="fa-solid fa-camera"></i>グッズレビュー</h2>
                    <p><i class="fa-solid fa-comments"></i><a class="js_loading" href=''>口コミ一覧</a></p>
                    <p><i class="fa-solid fa-comment-medical"></i><a class="js_loading" href=''>口コミ登録</a></p>
                    <h2><i class="fa-solid fa-address-card"></i>アカウント</h2>
                    @if(empty(Auth::user()->usersInfo))
                        <p><i class="fa-solid fa-user-plus"></i><a class="js_loading" href='/users_infos/create_users_info'>アカウント作成</a></p>
                    @else
                        <p><i class="fa-solid fa-user-gear"></i><a class="js_loading" href='/users_infos/show_users_info/{{ Auth::user()->usersInfo->id }}'>アカウント情報</a></p>
                        <p><i class="fa-solid fa-user-gear"></i><a class="js_loading" href='/users_infos/edit_users_info/{{ Auth::user()->usersInfo->id }}'>アカウント編集</a></p>
                    @endif
                </div>
            </div>
            @endguest
            <div class="col background_shuttle">
                <main class="py-4">
                    <h2>@yield('gamen_title')</h2>
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white text-center fixed-bottom">
      @Kazuhiro Ikoma
    </footer>
    
    <div id="loading" style="width:100vw; height:100vh; background-color:rgba(0,0,0,0.8); 
    position:fixed; z-index:9999; top:0;
    display:flex; justify-content:center; align-items:center;">
        <div style="color:white;">
            loading.........
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $('#loading').hide();
            $('.js_loading').on('click', function(){
                $('#loading').css('display','flex');
            });
        });
    </script>
</body>
</html>
