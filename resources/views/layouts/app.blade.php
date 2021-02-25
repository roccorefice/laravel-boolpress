<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand navbar-light bg-light">
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="posts_api">Posts (api)</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('posts.index')}}">All Posts</a>
                    </li>
                </ul>
            </nav>
        </header>

        <main class="container">
            @yield('main_content')
        </main>
        
        {{-- script js --}}
        <script src="{{ asset('js/app.js') }}"></script>
        
    </body>
</html>
