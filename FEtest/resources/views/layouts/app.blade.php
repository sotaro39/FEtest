<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>道場</title>
    <link rel="stylesheet" href="/main.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <header>
        <div class="header-container">
            <div class="header-contents">
                <div class="header-icons">
                    <div>基本情報技術者 試験情報＆徹底解説 -新制度に完全対応-</div>
                    <div><img src="{{ asset('storage/d-origin.jpg') }}" width="500" height="70"></div>
                </div>
                <div class="header-data">
                    <div>受験日を設定すると<br>カウントダウンが表示されます</div>
                    <button>設定する</button>
                </div>
            </div>
        </div>

        <ul class="nav-menu">
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
    <main class="container mt-10">
        <div class="row">
            <div class="col-md-7">
                <article class="main-contents">
                    <div>
                        @yield('content')
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <div class="side">
                    <a href="#"><img class="side-img"></a>
                </div>
                <div class="side">
                    <div class="ribon">Welcome to My Blog!</div>
                    <div class="container text-center side-tab">
                        <div class="row">
                            <div class="col">
                                <a href="{{ url('/') }}">基本情報技術者とは</a>
                            </div>
                            <div class="col">
                                <a href="/merit">基本情報技術者メリット</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/overview">試験範囲</a>
                            </div>
                            <div class="col">
                                <a href="/scope">出題範囲</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/formality">試験の形式と合格基準</a>
                            </div>
                            <div class="col">
                                <a href="/level">基本情報技術者の難易度</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/exemption">科目A試験の免除制度</a>
                            </div>
                            <div class="col">
                                <a href="/study">効果的な勉強方法</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">おすすめテキスト問題集</a>
                            </div>
                            <div class="col">
                                <a href="#">通信講座の紹介</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">よくある質問(FAQ)</a>
                            </div>
                            <div class="col">
                                <a href="#">統計情報</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="side">
                    <a href="#"><img class="side-img"></a>
                </div>
                <div class="side">
                    <div class="ribon">Welcome to My Blog!</div>
                    <div class="container text-center">
                        <div class="row">

                            <div class="col">
                                <a href="#">令和5年度</a>
                            </div>
                            <div class="col">
                                <a href="#">新制度サンプル問題</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="side">
                    <div class="ribon">基本情報技術者過去問大</div>
                    <div class="container text-center">
                        <div class="row">
                            <div class="col">
                                <a href="#">令和4年度</a>
                            </div>
                            <div class="col">
                                <a href="#">令和3年度</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">令和2年度</a>
                            </div>
                            <div class="col">
                                <a href="#">令和元年秋期</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">平成31年春期</a>
                            </div>
                            <div class="col">
                                <a href="#">平成30年秋期</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">平成30年春期</a>
                            </div>
                            <div class="col">
                                <a href="#">平成29年秋期</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">平成29年春期</a>
                            </div>
                            <div class="col">
                                <a href="#">平成28年秋期</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">平成28年春期</a>
                            </div>
                            <div class="col">
                                <a href="#">平成27年秋期</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">平成27年春期</a>
                            </div>
                            <div class="col">
                                <a href="#">平成26年秋期</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">平成26年春期</a>
                            </div>
                            <div class="col">
                                <a href="#">平成25年秋期</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">平成25年春期</a>
                            </div>
                            <div class="col">
                                <a href="#">平成24年秋期</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">平成24年春期</a>
                            </div>
                            <div class="col">
                                <a href="#">平成23年秋期</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">平成23年春期</a>
                            </div>
                            <div class="col">
                                <a href="#">平成22年秋期</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">平成22年春期</a>
                            </div>
                            <div class="col">
                                <a href="#">平成21年秋期</a>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a href="#">平成21年春期</a>
                                </div>
                                <div class="col">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="side">
                    <a href="#"><img class="side-img"></a>
                </div>
                <div class="side">
                    <div class="ribon">基本情報技術者過去問大</div>
                    <div class="container text-center">
                        <div class="row">
                            <div class="col">
                                <a href="#">平成20年秋期</a>
                            </div>
                            <div class="col">
                                <a href="#">平成20年春期</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">平成19年秋期</a>
                            </div>
                            <div class="col">
                                <a href="#">平成19年春期</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">平成18年秋期</a>
                            </div>
                            <div class="col">
                                <a href="#">平成18年春期</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">平成17年秋期</a>
                            </div>
                            <div class="col">
                                <a href="#">平成17年春期</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">平成16年秋期</a>
                            </div>
                            <div class="col">
                                <a href="#">平成16年春期</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">平成15年秋期</a>
                            </div>
                            <div class="col">
                                <a href="#">平成15年春期</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">平成14年秋期</a>
                            </div>
                            <div class="col">
                                <a href="#">平成14年春期</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#">平成13年秋期</a>
                            </div>
                            <div class="col">
                                <a href="#">平成13年春期</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="side">
                    <div class="ribon">Welcome to My Blog!</div>
                    <div class="container text-center">
                        <div class="row">

                            <div class="col">
                                <a href="#">模擬試験１</a>
                            </div>
                            <div class="col">
                                <a href="#">模擬試験２</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="side">
                    <div class="ribon">Welcome to My Blog!</div>
                    <div class="container text-center">
                        <div class="row">

                            <div class="col">
                                <a href="#">テクノロジ系</a>
                            </div>
                            <div class="col">
                                <a href="#">マネジメント系</a>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col">
                                <a href="#">ストラテジ系</a>
                            </div>
                            <div class="col">
                                <a href="#">午後問題分野別まとめ</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>
</body>

</html>
