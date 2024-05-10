<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>道場</title>
    <link rel="stylesheet" href="/main.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <div class="header-container">
            <div class="header-contents">
                <div class="icons">
                    <div>基本情報技術者 試験情報＆徹底解説 -新制度に完全対応-</div>
                    <div><img src="{{ asset('storage/d-origin.jpg') }}" width="500" height="70"></div>
                </div>
                <div class="header-data">
                    <div>受験日を設定すると<br>カウントダウンが表示されます</div>
                    <button>設定する</button>
                </div>
            </div>
        </div>

        <ul class="header-menu">
            <li><a href="#">過去問解説</a>
                <ul>
                    <li><a href="#">令和３年</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/') }}">基本情報技術者とは</a></li>
            <li><a href="{{ route('home.index') }}">過去問道場</a>
                <ul>
                    <li><a href="{{ route('home.index') }}">過去問道場 (科目A)</a></li>
                    <li><a href="#">過去問道場 (旧・午後試験)</a></li>
                </ul>
            </li>
            <li><a href="{{ route('articles.index') }}">掲示板</a></li>
            <li><a href="#">参考書・問題集</a></li>
            <li><a href="{{ route('login.index') }}">Login</a></li>
        </ul>

    </header>
    <main>
        <article>
            <div>
                @yield('content')
            </div>
            <div>
                <div>aaaaaaaaaaaaaaaaaaa</div>
                <div>aaaaaaaaaaaaaaaaaaa</div>
                <div>aaaaaaaaaaaaaaaaaaa</div>
                <div>aaaaaaaaaaaaaaaaaaa</div>
                <div>aaaaaaaaaaaaaaaaaaa</div>
                <div>aaaaaaaaaaaaaaaaaaa</div>
                <div>aaaaaaaaaaaaaaaaaaa</div>
                <div>aaaaaaaaaaaaaaaaaaa</div>
                <div>aaaaaaaaaaaaaaaaaaa</div>
            </div>
        </article>
    </main>
</body>

</html>
