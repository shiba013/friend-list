<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">
                <a href="/" class="header__logo-title">friend-list</a>
                <nav>
                    <ul class="header__nav">
                        @if(Auth::check())
                        <li class="header__nav-item">
                            <a href="/" class="header__nav-link">マイページ</a>
                        </li>
                        <li class="header__nav-item">
                            <form action="/logout" method="post">
                                @csrf
                                <button Class="header__nav-button">ログアウト</button>
                            </form>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>